<?php


namespace Interprise\Logger\Model;

use Interprise\Logger\Api\Data\CronMasterInterface;

class CronMaster extends \Magento\Framework\Model\AbstractModel implements CronMasterInterface
{

    protected $_eventPrefix = 'interprise_logger_cronmaster';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Interprise\Logger\Model\ResourceModel\CronMaster');
    }

    /**
     * Get cronmaster_id
     * @return string
     */
    public function getCronmasterId()
    {
        return $this->getData(self::CRONMASTER_ID);
    }

    /**
     * Set cronmaster_id
     * @param string $cronmasterId
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronmasterId($cronmasterId)
    {
        return $this->setData(self::CRONMASTER_ID, $cronmasterId);
    }

    /**
     * Get cron_name
     * @return string
     */
    public function getCronName()
    {
        return $this->getData(self::CRON_NAME);
    }

    /**
     * Set cron_name
     * @param string $cronName
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronName($cronName)
    {
        return $this->setData(self::CRON_NAME, $cronName);
    }

    /**
     * Get cron_action
     * @return string
     */
    public function getCronAction()
    {
        return $this->getData(self::CRON_ACTION);
    }

    /**
     * Set cron_action
     * @param string $cronAction
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronAction($cronAction)
    {
        return $this->setData(self::CRON_ACTION, $cronAction);
    }

    /**
     * Get cron_function
     * @return string
     */
    public function getCronFunction()
    {
        return $this->getData(self::CRON_FUNCTION);
    }

    /**
     * Set cron_function
     * @param string $cronFunction
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronFunction($cronFunction)
    {
        return $this->setData(self::CRON_FUNCTION, $cronFunction);
    }

    /**
     * Get cron_changelog_endpoint
     * @return string
     */
    public function getCronChangelogEndpoint()
    {
        return $this->getData(self::CRON_CHANGELOG_ENDPOINT);
    }

    /**
     * Set cron_changelog_endpoint
     * @param string $cronChangelogEndpoint
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronChangelogEndpoint($cronChangelogEndpoint)
    {
        return $this->setData(self::CRON_CHANGELOG_ENDPOINT, $cronChangelogEndpoint);
    }

    /**
     * Get cron_frequency
     * @return string
     */
    public function getCronFrequency()
    {
        return $this->getData(self::CRON_FREQUENCY);
    }

    /**
     * Set cron_frequency
     * @param string $cronFrequency
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronFrequency($cronFrequency)
    {
        return $this->setData(self::CRON_FREQUENCY, $cronFrequency);
    }

    /**
     * Get cron_status
     * @return string
     */
    public function getCronStatus()
    {
        return $this->getData(self::CRON_STATUS);
    }

    /**
     * Set cron_status
     * @param string $cronStatus
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronStatus($cronStatus)
    {
        return $this->setData(self::CRON_STATUS, $cronStatus);
    }

    /**
     * Get cron_active
     * @return string
     */
    public function getCronActive()
    {
        return $this->getData(self::CRON_ACTIVE);
    }

    /**
     * Set cron_active
     * @param string $cronActive
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronActive($cronActive)
    {
        return $this->setData(self::CRON_ACTIVE, $cronActive);
    }

    /**
     * Get cron_from_date
     * @return string
     */
    public function getCronFromDate()
    {
        return $this->getData(self::CRON_FROM_DATE);
    }

    /**
     * Set cron_from_date
     * @param string $cronFromDate
     * @return \Interprise\Logger\Api\Data\CronMasterInterface
     */
    public function setCronFromDate($cronFromDate)
    {
        return $this->setData(self::CRON_FROM_DATE, $cronFromDate);
    }
}
