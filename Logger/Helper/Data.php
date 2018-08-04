<?php

namespace Interprise\Logger\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper {

    public function getConfig($config_path) {
        return $this->scopeConfig->getValue(
                        $config_path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    public function getCurlData($URL,$full=''){
		//echo __METHOD__; die('dfdfdfdf');
		$this->result_data=array();
		$this->api_responce=array();
		$this->request_url=array();
		$this->reattempt=true;
                $interprise_status = $this->getConfig('setup/general/enable');
                $interprise_api_key = $this->getConfig('setup/general/api_key');
                $interprise_api_url = $this->getConfig('setup/general/api_url');
                $this->is_status = $interprise_status;
                $this->is_api_key = $interprise_api_key;
                $this->is_api_url = $interprise_api_url;
		//$username=$this->api_username;
		//$password=$this->api_password;
		if($full){
			$URL=$full;
		} else {
			$URL=$this->is_api_url.$URL;
		}
		
		//$URL=str_replace(" ", "%20",$URL);
		$this->is_next=false;
		$this->getCurlDataRequest('',$URL);
		return $this->api_responce_data();
	}
    public function getCurlDataRequest($URL,$full=''){
		//echo date("h:i:j");
		//echo "<br>";
		$username=$this->is_api_key;
		$password='';
		if($full){
			$URL=$full;
		} else {
			$URL=$this->is_api_url.$URL;
		}
		 
		$URL=str_replace(" ", "%20",$URL);
		try{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$URL);
			curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
			curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
			$result=curl_exec ($ch);
			$status_code = curl_getinfo($ch);   //get status code
			curl_close ($ch);
			
			$success_result=json_decode($result,true);
			 
			if($status_code['http_code']==200){
				if(array_key_exists('next', $success_result['links'])){
					$this->is_next=true;
					$this->getCurlDataRequest('',$success_result['links']['next']);
				}
				if(array_key_exists('type', $success_result['data'])){
					foreach ($success_result['data'] as $key => $value) {
						$this->result_data[$key]=$value;
					}
				} else {
					foreach ($success_result['data'] as $key => $value) {
						$this->result_data[]=$value;
					}
				}
				$this->api_responce[]='success';
			} else if($status_code['http_code']==404){
				$this->api_responce[]='error';
				
				if($success_result==''){
					if($this->reattempt){
						$this->reattempt=false;
						$this->getCurlDataRequest('',$URL);
					}else {
						if(!$this->is_next){
							$this->result_data[]=$success_result;
						}
					}
					
				}else {
					if(!$this->is_next){
						$this->result_data[]=$success_result;
					}
				}
				
			}else if($status_code['http_code']==0){
				$this->api_responce[]='error';
				$this->result_data[]=array('error'=>"Server not responding");
			} 
			else {
				$this->api_responce[]='error';
				$this->result_data[]=$success_result;
			}
			$this->request_url[]=$URL;
		} catch(Exception $e){
			 $e->getMessage();
		}		
	}
        public function api_responce_data(){
		$api_status=array_unique($this->api_responce);
		$is_responce=true;
		if(in_array('error', $api_status)){
			$is_responce=false;
		}
		if($this->is_next){
			$is_responce=true;
		}
		$decode_responce=json_encode($this->request_url);
                
		if($is_responce){
               
			//if(array_key_exists('errors', $this->result_data[0])){
				//$result=array('api_error'=>'1','status'=>'0','results'=>$this->result_data,'request'=>$decode_responce);
			//} else {
				$result=array('api_error'=>'1','status'=>'1','results'=>array('data'=>$this->result_data),'request'=>$decode_responce);
			//}
                       
			return $result;
		} else {
			
			
			if(is_null($this->result_data[0])){
				$response="The resource cannot be found";
			}else {
				$response=json_encode($this->result_data);
			}
			return array('api_error'=>'0','results'=>$response,'request'=>$decode_responce);
		}
	}

}
