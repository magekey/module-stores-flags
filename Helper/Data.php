<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\StoresFlags\Helper;

use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * General
     */
    const XML_PATH_GENERAL_ENABLED = 'mgk_storesflags/general/enabled';

    const XML_PATH_GENERAL_COMPILED_STYLES = 'mgk_storesflags/general/compiled_styles';

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
     * Check if module enabled
     *
     * @param mixed $scopeCode
     * @return bool
     */
    public function isEnabled($scopeCode = null)
    {
        return $this->scopeConfig->isSetFlag(
            static::XML_PATH_GENERAL_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $scopeCode
        );
    }

    /**
     * Check if use compiled styles
     *
     * @param mixed $scopeCode
     * @return bool
     */
    public function useCompiledStyles($scopeCode = null)
    {
        return $this->scopeConfig->isSetFlag(
            static::XML_PATH_GENERAL_COMPILED_STYLES,
            ScopeInterface::SCOPE_STORE,
            $scopeCode
        );
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
