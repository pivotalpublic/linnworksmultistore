<?php
/**
 * Pivotal LinnworksMultiStore Extension
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 * @copyright Copyright (c) Pivotal 2020-Today
 * @author Tait Pollack
 */

namespace Pivotal\LinnworksMultiStore\Model\Item\Source;

use Pivotal\LinnworksMultiStore\Model\Item

/**
 * IsActive
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 */
class IsActive implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \Namespace]\LinnworksMultiStore\Model\Item
     */
    protected $item;

    /**
     * Construct
     *
     * @param \Pivotal\LinnworksMultiStore\Model\Item $item
     */
    public function __construct(
        Item $item
    ) {
        $this->item = $item;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $availableOptions = $this->item->getAvailableStatuses();
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
