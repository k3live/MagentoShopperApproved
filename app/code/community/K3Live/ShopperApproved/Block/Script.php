<?php
class K3Live_ShopperApproved_Block_Script extends Mage_Core_Block_Template
{
    /*
     * Constructor method
     *
     * @access public
     * @param null
     * @return null
     */
    public function _construct()
    {
        parent::_construct();

        // Decide whether the ShopperApproved Plugin has been activated
        $website_id = Mage::helper('shopperapproved')->getAccountId();
        if(Mage::helper('shopperapproved')->getEnabled() == true && !empty($website_id)) {
            $this->setTemplate('shopperapproved/script.phtml');
        }
    }

    /*
     * Helper method to get data to show in ShopperApproved
     *
     * @access public
     * @param string $key
     * @return string
     */
    public function getSetting($key = null)
    {
        static $data;
        if(empty($data)) {
            $data = array(
                'account' => Mage::helper('shopperapproved')->getAccountId(), // ShopperApproved Account ID
                'enabled' => Mage::helper('shopperapproved')->getEnabled() // Module Status
            );
        }
        if(isset($data[$key])) {
            return $data[$key];
        } else {
            return null;
        }
    }
}