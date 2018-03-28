<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\StoresFlags\Block\Backend\Grid\Render;

use MageKey\StoresFlags\Model\Config\Source\Flags as SourceFlags;

class StoreFlag extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    /**
     * @var SourceFlags
     */
    protected $_sourceFlags;

    /**
     * @param \Magento\Backend\Block\Context $context
     * @param SourceFlags $sourceFlags
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Context $context,
        SourceFlags $sourceFlags,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_sourceFlags = $sourceFlags;
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\DataObject $row)
    {
        if ($value = $row->getData($this->getColumn()->getIndex())) {
            if ($flagName = $this->_sourceFlags->findFlag($value)) {
                $return = '<span class="flag-icon flag-icon-' . strtolower($value) . '"></span>';
                $return .= '<span>' . $flagName . '</span>';
                return $return;
            }
        }
        return '';
    }
}
