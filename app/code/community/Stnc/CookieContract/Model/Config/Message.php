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
class Stnc_CookieContract_Model_Config_Message
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'default', 'label' => 'Varsayılan Mesaj'),
            array('value' => 'custom', 'label' => 'Özel Mesaj'),
        );
    }
}
