<?php

namespace MidnightTest\ImageModule;

use Midnight\Image\ImageInterface;
use Midnight\Image\Plugin\PluginManager;
use Midnight\ImageModule\ImageFactory;

class ImageFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PluginManager
     */
    private $pluginManager;
    /**
     * @var ImageFactory
     */
    private $factory;

    protected function setUp()
    {
        $this->pluginManager = new PluginManager();
        $this->factory = new ImageFactory($this->pluginManager);
    }

    public function testCreate()
    {
        $this->assertInstanceOf(ImageInterface::class, $this->factory->create('assets/test.jpg'));
    }
}
