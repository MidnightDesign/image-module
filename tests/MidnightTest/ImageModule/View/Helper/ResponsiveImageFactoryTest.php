<?php

namespace MidnightTest\ImageModule\View\Helper;

use Midnight\Image\View\Helper\ResponsiveImage;
use Midnight\ImageModule\View\Helper\ResponsiveImageFactory;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\HelperPluginManager;

class ResponsiveImageFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ResponsiveImageFactory
     */
    private $factory;

    protected function setUp()
    {
        $this->factory = new ResponsiveImageFactory();
    }

    public function testCreateService()
    {
        $this->assertInstanceOf(ResponsiveImage::class, $this->factory->createService($this->getMockViewHelperPluginManager()));
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|ServiceLocatorInterface
     */
    private function getMockServiceLocator()
    {
        $sl = $this->getMock(HelperPluginManager::class, [], [], '', false);
        $sl->expects($this->any())
            ->method('get')
            ->with('Config')
            ->will($this->returnValue(['image' => ['responsive' => ['dir' => '.', 'publicDir' => '.']]]));
        return $sl;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|HelperPluginManager
     */
    private function getMockViewHelperPluginManager()
    {
        $sl = $this->getMock(HelperPluginManager::class, [], [], '', false);
        $sl->expects($this->any())
            ->method('getServiceLocator')
            ->will($this->returnValue($this->getMockServiceLocator()));
        return $sl;
    }
}
