<?php


namespace Interprise\Logger\Model;

use Interprise\Logger\Api\Data\CronLogInterface;

class CronLog extends \Magento\Framework\Model\AbstractModel implements CronLogInterface
{

    protected $_eventPrefix = 'interprise_logger_cronlog';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Interprise\Logger\Model\ResourceModel\CronLog');
    }

    /**
     * Get cronlog_id
     * @return string
     */
    public function getCronlogId()
    {
        return $this->getData(self::CRONLOG_ID);
    }

    /**
     * Set cronlog_id
     * @param string $cronlogId
     * @return \Interprise\Logger\Api\Data\CronLogInterface
     */
    public function setCronlogId($cronlogId)
    {
        return $this->setData(self::CRONLOG_ID, $cronlogId);
    }

    /**
     * Get CronMasterId
     * @return string
     */
    public function getCronMasterId()
    {
        return $this->getData(self::CRONMASTERID);
    }

    /**
     * Set CronMasterId
     * @param string $cronMasterId
     * @return \Interprise\Logger\Api\Data\CronLogInterface
     */
    public function setCronMasterId($cronMasterId)
    {
        return $this->setData(self::CRONMASTERID, $cronMasterId);
    }

    /**
     * Get RunTime
     * @return string
     */
    public function getRunTime()
    {
        return $this->getData(self::RUNTIME);
    }

    /**
     * Set RunTime
     * @param string $runTime
     * @return \Interprise\Logger\Api\Data\CronLogInterface
     */
    public function setRunTime($runTime)
    {
        return $this->setData(self::RUNTIME, $runTime);
    }

    /**
     * Get Request
     * @return string
     */
    public function getRequest()
    {
        return $this->getData(self::REQUEST);
    }

    /**
     * Set Request
     * @param string $request
     * @return \Interprise\Logger\Api\Data\CronLogInterface
     */
    public function setRequest($request)
    {
        return $this->setData(self::REQUEST, $request);
    }

    /**
     * Get Response
     * @return string
     */
    public function getResponse()
    {
        return $this->getData(self::RESPONSE);
    }

    /**
     * Set Response
     * @param string $response
     * @return \Interprise\Logger\Api\Data\CronLogInterface
     */
    public function setResponse($response)
    {
        return $this->setData(self::RESPONSE, $response);
    }

    /**
     * Get Status
     * @return string
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Set Status
     * @param string $status
     * @return \Interprise\Logger\Api\Data\CronLogInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get Remarks
     * @return string
     */
    public function getRemarks()
    {
        return $this->getData(self::REMARKS);
    }

    /**
     * Set Remarks
     * @param string $remarks
     * @return \Interprise\Logger\Api\Data\CronLogInterface
     */
    public function setRemarks($remarks)
    {
        return $this->setData(self::REMARKS, $remarks);
    }

    /**
     * Get ActivityCount
     * @return string
     */
    public function getActivityCount()
    {
        return $this->getData(self::ACTIVITYCOUNT);
    }

    /**
     * Set ActivityCount
     * @param string $activityCount
     * @return \Interprise\Logger\Api\Data\CronLogInterface
     */
    public function setActivityCount($activityCount)
    {
        return $this->setData(self::ACTIVITYCOUNT, $activityCount);
    }
}
