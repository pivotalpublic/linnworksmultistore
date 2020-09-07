<?php
/**
 * Pivotal LinnworksMultiStore Extension
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 * @copyright Copyright (c) Pivotal 2020-Today
 * @author Tait Pollack
 */

namespace Pivotal\LinnworksMultiStore\Api\Data;

interface ItemInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ITEM_ID      = 'multistoredb_id';
    const URL_KEY       = 'url_key';
    const NAME          = 'name';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    const IS_ACTIVE     = 'is_active';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get URL Key
     *
     * @return string
     */
    public function getUrlKey();

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Pivotal\LinnworksMultiStore\Api\Data\ItemInterface
     */
    public function setId($id);

    /**
     * Set URL Key
     *
     * @param string $url_key
     * @return \Pivotal\LinnworksMultiStore\Api\Data\ItemInterface
     */
    public function setUrlKey($url_key);

    /**
     * Return full URL including base url.
     *
     * @return mixed
     */
    public function getUrl();

    /**
     * Set name
     *
     * @param string $name
     * @return \Pivotal\LinnworksMultiStore\Api\Data\ItemInterface
     */
    public function setName($name);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Pivotal\LinnworksMultiStore\Api\Data\ItemInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Pivotal\LinnworksMultiStore\Api\Data\ItemInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param int|bool $isActive
     * @return \Pivotal\LinnworksMultiStore\Api\Data\ItemInterface
     */
    public function setIsActive($isActive);
}
