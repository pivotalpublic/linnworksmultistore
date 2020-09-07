<?php
/**
 * Pivotal LinnworksMultiStore Extension
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 * @copyright Copyright (c) Pivotal 2020-Today
 * @author Tait Pollack
 */

namespace Pivotal\LinnworksMultiStore\Model\ResourceModel\Item;

/**
 * Collection
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = '[db_primary_key]';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Pivotal\LinnworksMultiStore\Model\Item', 'Pivotal\LinnworksMultiStore\Model\ResourceModel\Item');
    }

}
