<?php

/**
 * Mageticaret Cookie Contract
 * @category    Cookie Contract
 * @package     Stnc_CookieContract
 * @copyright   Copyright (c) 2018 Mageticaret (http://www.mageticaret.com/)
 * @author      selmantunc.com
 * @email       selmantunc@gmail.com
 * @version     Release: 1.0.0.0
 */

class Stnc_CookieContract_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function selman()
    {
        return "selman";
    }

    public function isActive()
    {
        return !Mage::getStoreConfig('advanced/modules_disable_output/Stnc_CookieContract');
    }

    public function getType()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_default_section/type');
    }

    public function getBarPosition()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_default_section/bar_position');
    }

    public function getBoxPosition()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_default_section/box_position');
    }

    public function getSkin()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_default_section/skin');
    }

    public function getBehaviour()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_default_section/behaviour');
    }

    public function getAutohide()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_default_section/autohide');
    }

    public function getCmsPage()
    {
        $pageId = Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_system_section/cms_page');

        return Mage::helper('cms/page')->getPageUrl($pageId);
    }

    public function getShow()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_system_section/show');
    }

    public function getCustomMessage()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_system_section/custom_message');
    }

    public function getCustomMoreInfo()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_system_section/custom_more_info');
    }

    public function getCustomAccept()
    {
        return Mage::getStoreConfig('stnc_cookiecontract/stnc_cookiecontract_system_section/custom_accept');
    }
}
