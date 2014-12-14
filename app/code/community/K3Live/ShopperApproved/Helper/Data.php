<?php
/**
 * ShopperApproved Module for Magento 
 * @package     K3Live_ShopperApproved
 * @author      K3Live (http://www.k3live.com/)
 * @copyright   Copyright (c) 2014 K3Live (http://www.k3live.com/)
 * @license     Open Software License
 */

class K3Live_ShopperApproved_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getAccountId()
    {
        return Mage::getStoreConfig('k3live/shopperapproved/account_id');
    }

    public function getEnabled()
    {
        return (bool)Mage::getStoreConfig('k3live/shopperapproved/enabled');
    }

}