<?php

namespace MidnightTest\ImageModule;

use Midnight\ImageModule\PluginManagerFactory;
use Zend\ServiceManager\ServiceLocatorInterface;

class PluginManagerFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PluginManagerFactory
     */
    private $factory;

    protected function setUp()
    {
        $this->factory = new PluginManagerFactory();
    }

    public function testCreateService()
    {
        $this->factory->createService($this->getMockServiceLocator());
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|ServiceLocatorInterface
     */
    private function getMockServiceLocator()
    {
        $sl = $this->getMock(ServiceLocatorInterface::class);
        $sl->expects($this->any())
            ->method('get')
            ->with('Config')
            ->will($this->returnValue(['image_plugins' => []]));
        return $sl;
    }
}
