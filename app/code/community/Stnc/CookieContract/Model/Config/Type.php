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
class Stnc_CookieContract_Model_Config_Type
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'v-bar', 'label' => 'Altta bar şeklinde'),
            array('value' => 'v-box', 'label' => 'Kutu'),
        );
    }
}
