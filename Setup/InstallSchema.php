<?php
/**
 * Copyright © MageKey. All rights reserved.
 */
namespace MageKey\StoresFlags\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $connection = $setup->getConnection();

        /* Upgrade store table */
        $connection->addColumn(
            $installer->getTable('store'),
            'flag',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'nullable' => true,
                'length' => '32',
                'comment' => 'Store Flag'
            ]
        );

        $installer->endSetup();
    }
}
