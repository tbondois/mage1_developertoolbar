<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Wee
 * @package     Wee_DeveloperToolbar
 * @author      Stefan Wieczorek <info@mgt-modules.com>
 * @copyright   Copyright (c) 2011 (http://www.mgt-modules.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Wee_DeveloperToolbar_Block_Toolbar_Item_Memory extends Wee_DeveloperToolbar_Block_Toolbar_Item
{
    public function __construct($name, $label = '')
    {
        parent::__construct($name, $label);
        $this->setIcon(Mage::getDesign()->getSkinUrl('images/wee_developertoolbar/memory.png'));
    }
    
    public function getLabel()
    {
        return Mage::helper('wee_developertoolbar')->formatBytes(memory_get_usage(true));
    }
}