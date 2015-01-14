<?php

namespace Midnight\ImageModule;

use Midnight\Image\Plugin\PluginManager;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ImageFactoryFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return ImageFactory
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new ImageFactory($this->getPluginManager($serviceLocator));
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return PluginManager
     */
    private function getPluginManager(ServiceLocatorInterface $serviceLocator)
    {
        return $serviceLocator->get(PluginManager::class);
    }
}
