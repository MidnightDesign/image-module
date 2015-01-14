<?php

namespace Midnight\ImageModule;

use Midnight\Image\Plugin\PluginManager;

return [
    'service_manager' => [
        'factories' => [
            ImageFactory::class => ImageFactoryFactory::class,
            PluginManager::class => PluginManagerFactory::class,
        ],
    ],
    'image_plugins' => [
    ],
];
