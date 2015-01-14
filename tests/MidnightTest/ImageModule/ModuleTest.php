<?php

namespace MidnightTest\ImageModule;

use Midnight\ImageModule\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Module
     */
    private $module;

    protected function setUp()
    {
        $this->module = new Module();
    }

    public function testGetConfigReturnsArray()
    {
        $this->assertInternalType('array', $this->module->getConfig());
    }

    public function testGetServiceConfigReturnsArray()
    {
        $this->assertInternalType('array', $this->module->getServiceConfig());
    }

    public function testGetViewHelperConfigReturnsArray()
    {
        $this->assertInternalType('array', $this->module->getViewHelperConfig());
    }
}
