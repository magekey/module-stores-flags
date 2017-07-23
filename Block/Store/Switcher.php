<?php
/**
 * Copyright © MageKey. All rights reserved.
 */
namespace MageKey\StoresFlags\Block\Store;

class Switcher extends \Magento\Store\Block\Switcher
{
    /**
     * @return null|string
     */
    public function getCurrentFlag()
    {
        return $this->_storeManager->getStore()->getFlag();
    }
}
