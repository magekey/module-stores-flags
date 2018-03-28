<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\StoresFlags\Observer;

use Magento\Framework\Event\ObserverInterface;
use MageKey\StoresFlags\Model\Config\Source\Flags as FlagsSource;

class PrepareStoreForm implements ObserverInterface
{
    /**
     * @var \Magento\Framework\Registry
     */
    protected $coreRegistry = null;

    /**
     * @var FlagsSource
     */
    protected $flagsSource;

    /**
     * @param \Magento\Framework\Registry $registry
     * @param FlagsSource $flagsSource
     */
    public function __construct(
        \Magento\Framework\Registry $registry,
        FlagsSource $flagsSource
    ) {
        $this->coreRegistry = $registry;
        $this->flagsSource = $flagsSource;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if ($this->coreRegistry->registry('store_type') == 'store') {
            $block = $observer->getEvent()->getBlock();
            $form = $block->getForm();
            $this->prepareStoreFieldSet($form);
        }
    }

    /**
     * @param \Magento\Framework\Data\Form $form
     */
    protected function prepareStoreFieldSet(\Magento\Framework\Data\Form $form)
    {
        $storeModel = $this->coreRegistry->registry('store_data');

        $fieldset = $form->addFieldset('storesflags_fieldset', ['legend' => __("Store View Flag")]);
        $fieldset->addField(
            'flag',
            'select',
            [
                'name' => 'store[flag]',
                'label' => __('Store Country'),
                'value' => $storeModel->getFlag(),
                'values' => $this->flagsSource->toOptionArray(),
                'required' => false,
                'disabled' => $storeModel->isReadOnly()
            ]
        );
    }
}
