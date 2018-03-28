<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\StoresFlags\Block;

class CompiledStyles extends \Magento\Framework\View\Element\AbstractBlock
{
    /**
     * @var \Magento\Framework\View\Page\Config
     */
    protected $_pageConfig;

    /**
     * @param \Magento\Framework\View\Element\Context $context
     * @param \Magento\Framework\View\Page\Config $pageConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Context $context,
        \Magento\Framework\View\Page\Config $pageConfig,
        array $data = []
    ) {
        $this->_pageConfig = $pageConfig;
        parent::__construct($context, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_pageConfig->addPageAsset('MageKey_StoresFlags::css/styles.css');
    }
}
