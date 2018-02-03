<?php
/**
 * Copyright © MageKey. All rights reserved.
 */
namespace MageKey\StoresFlags\Helper;

class Store extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    /**
     * Retrieve current flag
     *
     * @return string
     */
    public function getCurrentFlag()
    {
        return $this->_storeManager->getStore()->getFlag();
    }
}
