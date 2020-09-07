<?php
/**
 * Pivotal LinnworksMultiStore Extension
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 * @copyright Copyright (c) Pivotal 2020-Today
 * @author Tait Pollack
 */

namespace Pivotal\LinnworksMultiStore\Block\Frontend;

use Pivotal\LinnworksMultiStore\Model\ItemFactory;
use Magento\Framework\View\Element\Template;

/**
 * Item
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 */
class Item extends Template
{
    /**
     * @var ItemFactory
     */
    private $itemFactory;

    /**
     * Construct
     * 
     * @param Template\Context $context
     * @param array $data
     * @param ItemFactory $itemFactory
     */
    public function __construct(
        Template\Context $context,
        array $data = [],
        ItemFactory $itemFactory
    ) {
        parent::__construct($context, $data);
        $this->itemFactory = $itemFactory;
    }

    /**
     * Get items
     * 
     * @return array $items
     */
    public function getItems()
    {
        $itemModel = $this->itemFactory->create();
        $itemCollection = $itemModel->getCollection();
        $items = $itemCollection->getData();
        return $items;
    }
}