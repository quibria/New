<?php
/**
 * MageApps
 *
 * @Author	 	MageApps  
 * @Category	Extension 
 * @package   	MageApps_SuperCheckout
 * @Version		2.1
 * @copyright 	Copyright (c) 2012 MageApps (http://www.mageapps.com)
 * @license   	Please read license.txt included on your extension package.
 */
	
class Mageapps_Perc_Model_System_Config_Source_Vendor_Tree
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {

        $_CategoryHelper = Mage::helper("mageapps_perc")->getCategoriesDropdown();
        $data           = array();


        foreach($_CategoryHelper as $value) {  
            foreach($value as $key => $val) {

                if($key=='label'){
                    $catNameIs = $val;
                }
                if($key=='value'){
                    $catIdIs = $val;
                }
                if($key=='level'){
                    $catLevelIs = $val;
                    $b ='';
                    for($i=1;$i<$catLevelIs;$i++){
                        $b .= "|_";
                    }
                }
            }

            $data[] = array(
                'label' => $b.'_'.$catNameIs,
                'value' => $catIdIs
            );
        }

        return $data;
    }
    /**
     * Options getter
     *
     * @return array
     */
    public function toArray()
    {

        $_CategoryHelper = Mage::helper("mageapps_perc")->getCategoriesDropdown();
        $data           = array();


        foreach($_CategoryHelper as $value) {  
            foreach($value as $key => $val) {

                if($key=='label'){
                    $catNameIs = $val;
                }
                if($key=='value'){
                    $catIdIs = $val;
                }
                if($key=='level'){
                    $catLevelIs = $val;
                    $b ='|';
                    for($i=1;$i<$catLevelIs;$i++){
                        $b .= " |";
                    }
                }
            }

            $data[] = array(
                'label' => $b.'_'.$catNameIs,
                'value' => $catIdIs
            );
        }

        return $data;
    }

}