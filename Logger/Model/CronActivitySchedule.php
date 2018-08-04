<?php


namespace Interprise\Logger\Model;

use Interprise\Logger\Api\Data\CronActivityScheduleInterface;

class CronActivitySchedule extends \Magento\Framework\Model\AbstractModel implements CronActivityScheduleInterface
{

    protected $_eventPrefix = 'interprise_logger_cronactivityschedule';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Interprise\Logger\Model\ResourceModel\CronActivitySchedule');
    }

    /**
     * Get cronactivityschedule_id
     * @return string
     */
    public function getCronactivityscheduleId()
    {
        return $this->getData(self::CRONACTIVITYSCHEDULE_ID);
    }

    /**
     * Set cronactivityschedule_id
     * @param string $cronactivityscheduleId
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setCronactivityscheduleId($cronactivityscheduleId)
    {
        return $this->setData(self::CRONACTIVITYSCHEDULE_ID, $cronactivityscheduleId);
    }

    /**
     * Get CronLogId
     * @return string
     */
    public function getCronLogId()
    {
        return $this->getData(self::CRONLOGID);
    }

    /**
     * Set CronLogId
     * @param string $cronLogId
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setCronLogId($cronLogId)
    {
        return $this->setData(self::CRONLOGID, $cronLogId);
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
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setCronMasterId($cronMasterId)
    {
        return $this->setData(self::CRONMASTERID, $cronMasterId);
    }

    /**
     * Get ActionType
     * @return string
     */
    public function getActionType()
    {
        return $this->getData(self::ACTIONTYPE);
    }

    /**
     * Set ActionType
     * @param string $actionType
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setActionType($actionType)
    {
        return $this->setData(self::ACTIONTYPE, $actionType);
    }

    /**
     * Get DataId
     * @return string
     */
    public function getDataId()
    {
        return $this->getData(self::DATAID);
    }

    /**
     * Set DataId
     * @param string $dataId
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setDataId($dataId)
    {
        return $this->setData(self::DATAID, $dataId);
    }

    /**
     * Get JsonData
     * @return string
     */
    public function getJsonData()
    {
        return $this->getData(self::JSONDATA);
    }

    /**
     * Set JsonData
     * @param string $jsonData
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setJsonData($jsonData)
    {
        return $this->setData(self::JSONDATA, $jsonData);
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
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get ActivityTime
     * @return string
     */
    public function getActivityTime()
    {
        return $this->getData(self::ACTIVITYTIME);
    }

    /**
     * Set ActivityTime
     * @param string $activityTime
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setActivityTime($activityTime)
    {
        return $this->setData(self::ACTIVITYTIME, $activityTime);
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
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setRemarks($remarks)
    {
        return $this->setData(self::REMARKS, $remarks);
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
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
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
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setResponse($response)
    {
        return $this->setData(self::RESPONSE, $response);
    }

    /**
     * Get UpdateDate
     * @return string
     */
    public function getUpdateDate()
    {
        return $this->getData(self::UPDATEDATE);
    }

    /**
     * Set UpdateDate
     * @param string $updateDate
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setUpdateDate($updateDate)
    {
        return $this->setData(self::UPDATEDATE, $updateDate);
    }

    /**
     * Get IsActive
     * @return string
     */
    public function getIsActive()
    {
        return $this->getData(self::ISACTIVE);
    }

    /**
     * Set IsActive
     * @param string $isActive
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::ISACTIVE, $isActive);
    }

    /**
     * Get ItemStatus
     * @return string
     */
    public function getItemStatus()
    {
        return $this->getData(self::ITEMSTATUS);
    }

    /**
     * Set ItemStatus
     * @param string $itemStatus
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setItemStatus($itemStatus)
    {
        return $this->setData(self::ITEMSTATUS, $itemStatus);
    }

    /**
     * Get site_id
     * @return string
     */
    public function getSiteId()
    {
        return $this->getData(self::SITE_ID);
    }

    /**
     * Set site_id
     * @param string $siteId
     * @return \Interprise\Logger\Api\Data\CronActivityScheduleInterface
     */
    public function setSiteId($siteId)
    {
        return $this->setData(self::SITE_ID, $siteId);
    }
}
