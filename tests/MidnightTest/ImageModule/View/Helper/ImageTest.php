<?php

namespace MidnightTest\ImageModule\View\Helper;

use Midnight\Image\ImageInterface;
use Midnight\ImageModule\ImageFactory;
use Midnight\ImageModule\View\Helper\Image;

class ImageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Image
     */
    private $imageHelper;

    protected function setUp()
    {
        $this->imageHelper = new Image($this->getMockImageFactory());
    }

    public function testInvoke()
    {
        $imageHelper = $this->imageHelper;
        $imageHelper('assets/test.jpg');
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|ImageFactory
     */
    private function getMockImageFactory()
    {
        return $this->getMock(ImageFactory::class, [], [], '', false);
    }
}
