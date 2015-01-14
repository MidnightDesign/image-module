<?php

namespace Midnight\ImageModule;

use Midnight\Image\Plugin\PluginManager;
use Midnight\ImageModule\View\Helper\ImageFactory as ImageHelperFactory;
use Midnight\ImageModule\View\Helper\ResponsiveImageFactory;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface, ViewHelperProviderInterface
{
    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include dirname(__DIR__) . '/config/module.config.php';
    }

    /**
     * @return array
     */
    public function getServiceConfig()
    {
        return [
            'factories' => [
                ImageFactory::class => ImageFactoryFactory::class,
                PluginManager::class => PluginManagerFactory::class,
            ]
        ];
    }

    /**
     * @return array
     */
    public function getViewHelperConfig()
    {
        return [
            'factories' => [
                'image' => ImageHelperFactory::class,
                'responsiveImage' => ResponsiveImageFactory::class,
            ],
        ];
    }
}
