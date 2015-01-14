<?php

namespace MidnightTest\ImageModule;

use Midnight\Image\Plugin\PluginManager;
use Midnight\ImageModule\ImageFactory;
use Midnight\ImageModule\ImageFactoryFactory;
use Zend\ServiceManager\ServiceLocatorInterface;

class ImageFactoryFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ImageFactoryFactory
     */
    private $factory;

    public function setUp()
    {
        $this->factory = new ImageFactoryFactory();
    }

    public function testCreateService()
    {
        $this->assertInstanceOf(ImageFactory::class, $this->factory->createService($this->getMockServiceLocator()));
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|ServiceLocatorInterface
     */
    private function getMockServiceLocator()
    {
        $sl = $this->getMock(ServiceLocatorInterface::class);
        $sl
            ->expects($this->any())
            ->method('get')
            ->with(PluginManager::class)
            ->will($this->returnValue($this->getMockPluginManager()));
        return $sl;
    }

    private function getMockPluginManager()
    {
        return $this->getMock(PluginManager::class);
    }
}
