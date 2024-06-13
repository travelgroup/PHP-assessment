<?php

namespace Tests;

require_once __DIR__ . "/../boot.php";

class BasicTest extends \PHPUnit\Framework\TestCase
{
    public function testConfigLoaded()
    {
        $this->assertClassHasAttribute('credentials', '\Config\ConfigDatabase');
    }
    //--------------------------------------------------------------------------


    public function testLoggingLoaded()
    {
        $this->assertInstanceOf('\core\Logging', new \Core\Logging);
    }
    //--------------------------------------------------------------------------


    public function testDatabaseLoaded()
    {
        $this->assertInstanceOf('\core\Database', new \Core\Database);
    }
    //--------------------------------------------------------------------------
}
