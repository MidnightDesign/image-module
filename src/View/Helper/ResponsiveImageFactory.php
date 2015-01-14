<?php

namespace Midnight\ImageModule\View\Helper;

use Midnight\Image\Plugin\PluginManager;
use Zend\ServiceManager\ServiceLocatorInterface;

class ResponsiveImageFactory extends \Midnight\Image\View\Helper\ResponsiveImageFactory
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return array
     */
    private function getConfig(ServiceLocatorInterface $serviceLocator)
    {
        if (!$serviceLocator instanceof PluginManager) {
            throw new \LogicException;
        }
        $config = $serviceLocator->getServiceLocator()->get('Config');
        return $config['image']['responsive'];
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return string
     */
    protected function getDestination(ServiceLocatorInterface $serviceLocator)
    {
        return $this->getConfig($serviceLocator)['dir'];
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return string
     */
    protected function getPublicDir(ServiceLocatorInterface $serviceLocator)
    {
        return $this->getConfig($serviceLocator)['publicDir'];
    }

}
