<?php

namespace Midnight\ImageModule;

use Midnight\Image\Plugin\PluginManager;
use Midnight\ImageModule\View\Helper\ImageFactory as ImageHelperFactory;

return [
    'service_manager' => [
        'factories' => [
            ImageFactory::class => ImageFactoryFactory::class,
            PluginManager::class => PluginManagerFactory::class,
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'image' => ImageHelperFactory::class,
        ],
    ],
    'image_plugins' => [
    ],
];
