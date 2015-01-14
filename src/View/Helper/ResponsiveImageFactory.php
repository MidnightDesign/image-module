<?php

namespace Midnight\ImageModule\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\HelperPluginManager;

class ResponsiveImageFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return ResponsiveImage
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new ResponsiveImage($this->getDestination($serviceLocator), $this->getPublicDir($serviceLocator));
    }

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return array
     */
    private function getConfig(ServiceLocatorInterface $serviceLocator)
    {
        if (!$serviceLocator instanceof HelperPluginManager) {
            throw new \LogicException(sprintf('Expected instance of %s.', HelperPluginManager::class));
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
