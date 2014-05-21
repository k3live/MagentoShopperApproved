<?php

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