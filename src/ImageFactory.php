<?php

namespace Midnight\ImageModule;

use Midnight\Image\Image;
use Midnight\Image\Plugin\PluginManager;

/**
 * Class ImageFactory
 *
 * @package Midnight\ImageModule
 */
class ImageFactory
{
    /**
     * @var PluginManager
     */
    private $pluginManager;

    /**
     * @param PluginManager $pluginManager
     */
    public function __construct(PluginManager $pluginManager)
    {
        $this->pluginManager = $pluginManager;
    }

    /**
     * @param string $file
     * @return Image
     */
    public function create($file)
    {
        $image = Image::open($file);
        $image->setPluginManager($this->pluginManager);
        return $image;
    }
}
