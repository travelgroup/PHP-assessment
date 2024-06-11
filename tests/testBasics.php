<?php

require_once __DIR__ . "/../boot.php";

use PHPUnit\Framework\TestCase;

class testBasics extends TestCase
{
    public function testConfigLoaded()
    {
        $this->assertClassHasAttribute('credentials', '\interview\Config_Database');
    }
    //--------------------------------------------------------------------------


    public function testLoggingLoaded()
    {
        $this->assertInstanceOf('\interview\Logging', new \interview\Logging);
    }
    //--------------------------------------------------------------------------


    public function testDatabaseLoaded()
    {
        $this->assertInstanceOf('\interview\Database', new \interview\Database);
    }
    //--------------------------------------------------------------------------
}
