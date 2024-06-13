<?php

namespace Config;

class ConfigDatabase
{   
    /**
     * Declare db credentials
     */
    public $credentials = array(
        'host'     => 'localhost',
        'port'     => 3306,
        'database' => 'travel',
        'user'     => 'seskie',
        'pass'     => 'seskie'
    );
    
    /**
     * Get host
     */
    public function getHost(): string
    {
        return $this->credentials['host'];
    }
    //--------------------------------------------------------------------------

    /**
     * Get port
     */
    public function getPort(): int|string
    {
        return $this->credentials['port'];
    }
    //--------------------------------------------------------------------------

    /**
     * Get db
     */
    public function getDatabase(): string
    {
        return $this->credentials['database'];
    }
    //--------------------------------------------------------------------------

    /**
     * Get user
     */
    public function getUser(): string
    {
        return $this->credentials['user'];
    }
    //--------------------------------------------------------------------------

    /**
     * Get pass
     */
    public function getPass(): string
    {
        return $this->credentials['pass'];
    }
    //--------------------------------------------------------------------------
    
    /**
     * Get charset
     */
    public function getCharSet(): string
    {
        return 'utf8mb4';
    }
    //--------------------------------------------------------------------------

    
}
