<?php

namespace Interprise\Logger\Controller\Cronprocessor;

class Index extends \Magento\Framework\App\Action\Action {

    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactor
     */
    public $is_status;
    public $is_api_key;
    public $is_api_url;
    public $helper;

    public function __construct(
    \Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Interprise\Logger\Helper\Data $_helper
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->helper = $_helper;
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute() {
        $key  = $this->helper->getConfig('setup/general/api_key');
        echo $key; die('dfdfdfdfdfdf');
        //$interprise_status = $this->_objectManager->create('Interprise\Logger\Helper\Data')->getConfig('setup/general/enable');
        //$interprise_api_key = $this->_objectManager->create('Interprise\Logger\Helper\Data')->getConfig('setup/general/api_key');
        //$interprise_api_url = $this->_objectManager->create('Interprise\Logger\Helper\Data')->getConfig('setup/general/api_url');
        $data = $this->getItem();
        if (is_array($data) && count($data) > 0) {
            //$this->interprise_processor($processor_id, 1);
            do {
                $this->do_inprocess_item($data);
                $master_id = $data['CronMasterId'];
                switch ($master_id) {
                    case 1:
                        $load_model = $this->_objectManager->create('Interprise\Logger\Model\Inventoryitem');
                        $result = $load_model->Inventoryitem_single($data);
                        break;

                    default:
                        break;
                }
                $data = $this->getItem();
            } while (count($data) > 0);
        }
    }

    public function prf($param) {
        echo "<pre>";
        print_r($param);
        echo "</pre>";
    }

    public function do_inprocess_item($data) {
        $data_id = $data['DataId'];
        $master_id = $data['CronMasterId'];
        $collections = $this->_objectManager->create('Interprise\Logger\Model\CronActivitySchedule')->getCollection()
                ->addFieldToFilter('DataId', array('eq' => "$data_id"))
                ->addFieldToFilter('CronMasterId', array('eq' => $master_id))
                ->addFieldToFilter('Status', array('eq' => 'pending'));
        foreach ($collections as $item) {
            $item->setStatus('In Process');
            $item->save();
        }
    }

    public function getItem() {
        $collections = $this->_objectManager->create('Interprise\Logger\Model\CronActivitySchedule');
        $collection = $collections->getCollection();
        $collection->addFilter('status', array('pending'));
        $collection->getSelect()->order(array('priority asc', 'cronactivityschedule_id asc'))->limit(1);
        $result = $collection->getData();
        if (isset($result[0])) {
            return $result[0];
        } else {
            return array();
        }
    }

    public function interprise_processor_count($id) {
        $interprise_processor = $this->cron_helper->_getTableName('interprise_processor');
        $result = $this->cron_helper->connection->fetchRow("select status from $interprise_processor where id=$id");
        return $result['status'];
    }

}
