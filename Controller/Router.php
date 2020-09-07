<?php
/**
 * Pivotal LinnworksMultiStore Extension
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 * @copyright Copyright (c) Pivotal 2020-Today
 * @author Tait Pollack
 */

namespace Pivotal\LinnworksMultiStore\Controller;

use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;

/**
 * Router
 *
 * @category Pivotal
 * @package Pivotal_LinnworksMultiStore
 */
class Router implements RouterInterface
{
    /**
     * @var ActionFactory
     */
    private $actionFactory;

    /**
     * Construct
     *
     * @param ActionFactory $actionFactory
     */
    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    /**
     * Match application action by request
     *
     * @param RequestInterface $request
     * @return ActionInterface
     */
    public function match(RequestInterface $request)
    {
        $pathInfo = $request->getPathInfo();
        if (preg_match("%/linnworksmultistore/(.*?).html$%", $pathInfo, $m)) {
            $request->setModuleName('linnworksmultistore')->setControllerName('index')->setActionName('detail');
            return $this->actionFactory->create('Magento\Framework\App\Action\Forward');
        }
    }
}