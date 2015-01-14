<?php

namespace Midnight\ImageModule;

use Midnight\ImageModule\View\Helper\ResponsiveImageFactory;

return [
    'image_plugins' => [
        'factories' => [
            'responsiveImage' => ResponsiveImageFactory::class,
        ],
    ],
    'image' => [
        'responsive' => [
            'dir' => 'public/images/responsive',
            'publicDir' => 'public'
        ]
    ]
];
