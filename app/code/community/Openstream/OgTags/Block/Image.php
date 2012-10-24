<?php

class Openstream_OgTags_Block_Image extends Mage_Core_Block_Template
{
    public function getProductsImage()
    {
        $_image = '';

        if ($_product = Mage::registry('current_product')) {
            /** @var $_helper Mage_Catalog_Helper_Image */
            $_helper = Mage::helper('catalog/image');
            $_image = $_helper->init($_product, 'image');
        }

        return $_image;
    }
}