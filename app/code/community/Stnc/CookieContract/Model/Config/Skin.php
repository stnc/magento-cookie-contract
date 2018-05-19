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
class Stnc_CookieContract_Model_Config_Skin
{
    public function toOptionArray()
    {
        return array(
            array('value' => '', 'label' => 'Yalnızca arayuz'),
            array('value' => 'v-yellow-alert', 'label' => 'Sarı Uyarı'),
            array('value' => 'v-dark-clean', 'label' => 'Temiz siyah'),
            array('value' => 'v-minimalist', 'label' => 'Minimalist')
        );
    }
}
