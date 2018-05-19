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
class Stnc_CookieContract_Model_Config_Box_Position
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'v-top-left', 'label' => 'Üst Sol'),
            array('value' => 'v-top-right', 'label' => 'Üst Sağ'),
            array('value' => 'v-bottom-left', 'label' => 'Alt Sol'),
            array('value' => 'v-bottom-right', 'label' => 'Alt Sağ'),
        );
    }
}
