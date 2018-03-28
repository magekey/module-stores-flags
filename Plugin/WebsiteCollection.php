<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\StoresFlags\Plugin;

class WebsiteCollection
{
    /**
     * @param \Magento\Checkout\CustomerData\ItemPoolInterface $subject
     * @param mixed $return
     * @return mixed $return
     */
    public function afterJoinGroupAndStore(
        \Magento\Store\Model\ResourceModel\Website\Collection $subject,
        $return
    ) {
        $subject
            ->getSelect()
            ->columns([
                'store_flag' => 'store_table.flag'
            ]);

        return $return;
    }
}
