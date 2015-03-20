<?php

class Ho_Customer_Helper_Config extends Mage_Core_Helper_Abstract
{
    const XML_PATH_COMPLETE_PROFILE_EMAIL_ENABLED   = 'ho_customer/follow_up_email/enabled';
    const XML_PATH_COMPLETE_PROFILE_START_DATE      = 'ho_customer/follow_up_email/start_date';
    const XML_PATH_COMPLETE_PROFILE_DAYS_AFTER      = 'ho_customer/follow_up_email/days_after';
    const XML_PATH_COMPLETE_PROFILE_SENDER          = 'ho_customer/follow_up_email/sender';
    const XML_PATH_COMPLETE_PROFILE_TEMPLATE        = 'ho_customer/follow_up_email/template';

    /**
     * @param null|Mage_Core_Model_Store|int $store
     * @return bool
     */
    public function isEmailEnabled($store = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_COMPLETE_PROFILE_EMAIL_ENABLED, $store);
    }

    /**
     * @param null|Mage_Core_Model_Store|int $store
     * @return string
     */
    public function getEmailStartDate($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_COMPLETE_PROFILE_START_DATE, $store);
    }

    /**
     * @param null|Mage_Core_Model_Store|int $store
     * @return int
     */
    public function getEmailDaysAfter($store = null)
    {
        return (int) Mage::getStoreConfig(self::XML_PATH_COMPLETE_PROFILE_DAYS_AFTER, $store);
    }

    /**
     * @param null|Mage_Core_Model_Store|int $store
     * @return string
     */
    public function getEmailSender($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_COMPLETE_PROFILE_SENDER, $store);
    }

    /**
     * @param null|Mage_Core_Model_Store|int $store
     * @return string
     */
    public function getEmailTemplate($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_COMPLETE_PROFILE_TEMPLATE, $store);
    }
}