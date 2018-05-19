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
class Stnc_CookieContract_Model_Config_Behaviour
{
    public function toOptionArray()
    {
        return array(
            array('value' => 365, 'label' => 'Asla gösterme'),
            array('value' => 1, 'label' => 'Günün geri kalanında saklan'),
            array('value' => 0, 'label' => 'Oturumun geri kalanında saklan')
        );
    }
}
