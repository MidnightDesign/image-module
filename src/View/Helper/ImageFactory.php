<?php

namespace Midnight\ImageModule\View\Helper;

use LogicException;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\HelperPluginManager;

class ImageFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return Image
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        if(!$serviceLocator instanceof HelperPluginManager) {
            throw new LogicException;
        }
        $sl = $serviceLocator->getServiceLocator();
        return new Image($this->getImageFactory($sl));
    }

    /**
     * @param ServiceLocatorInterface $sl
     * @return \Midnight\ImageModule\ImageFactory
     */
    private function getImageFactory(ServiceLocatorInterface $sl)
    {
        return $sl->get(\Midnight\ImageModule\ImageFactory::class);
    }
}
