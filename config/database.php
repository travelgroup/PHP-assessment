<?php

namespace interview;

class Config_Database
{

    private $credentials = array(
        'host' => "localhost",
        'port' => NULL,
        'dbName' => 'interview',
        'username' => 'root',
        'password' => ''
    );

    public function getHost()
    {
        return $this->credentials['host'];
    }

    //--------------------------------------------------------------------------


    public function getPort()
    {
        return $this->credentials['port'];
    }

    //--------------------------------------------------------------------------


    public function getDatabase()
    {
        return $this->credentials['dbName'];
    }

    //--------------------------------------------------------------------------


    public function getUser()
    {
        return $this->credentials['username'];
    }

    //--------------------------------------------------------------------------


    public function getPass()
    {
        return $this->credentials['password'];
    }
    //--------------------------------------------------------------------------
}
