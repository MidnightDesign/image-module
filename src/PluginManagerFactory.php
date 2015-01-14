<?php

namespace Midnight\ImageModule;

use Midnight\Image\Plugin\PluginManager;
use Zend\ServiceManager\Config;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class PluginManagerFactory
 *
 * @package Midnight\ImageModule
 */
class PluginManagerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return PluginManager
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $pluginManager = new PluginManager($this->getConfig($serviceLocator));
        $pluginManager->setServiceLocator($serviceLocator);
        return $pluginManager;
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return Config
     */
    private function getConfig(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        return new Config($config['image_plugins']);
    }
}
