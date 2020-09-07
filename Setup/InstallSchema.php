<?php
/**
 * Pivotal LinnworksMultiStore Extension
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 * @copyright Copyright (c) Pivotal 2020-Today
 * @author Tait Pollack
 */

namespace Pivotal\LinnworksMultiStore\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * InstallSchema
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
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

        if ($installer->getConnection()->isTableExists('multistoredb')) {
            $installer->getConnection()->dropTable('multistoredb');
        }

        $table = $installer->getConnection()
            ->newTable($installer->getTable('multistoredb'))
            ->addColumn('multistoredb_id', Table::TYPE_SMALLINT, null, ['identity' => true, 'nullable' => false, 'primary' => true], 'ID')
            ->addColumn('url_key', Table::TYPE_TEXT, 100, ['nullable' => true, 'default' => null], 'URL Key')
            ->addColumn('name', Table::TYPE_TEXT, 255, ['nullable' => false], 'Name')
            ->addColumn('is_active', Table::TYPE_SMALLINT, null, ['nullable' => false, 'default' => '1'], 'Is Active?')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addIndex($installer->getIdxName('multistoredb_idx', ['url_key']), ['url_key'])
            ->setComment('Pivotal LinnworksMultiStore Table');

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}
