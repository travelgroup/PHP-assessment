<?php

namespace interview;

use Exception;

class Database
{
    protected $link;
    protected $connected;

    public function __construct()
    {
        $credentials = new Config_Database();

        try {
            $config = new Config_Database();
            $dsn = "mysql:host=" . $config->getHost() . ";dbname=" . $config->getDatabase() . ";port=" . $config->getPort();
            $this->link = new \PDO($dsn, $config->getUser(), $config->getPass());
            $this->link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connected = true;
        } catch (\PDOException $e) {
            $this->connected = false;
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //--------------------------------------------------------------------------
    public function insert($tableName, $columns, $data, $ignore = false)
    {
        $statement = "INSERT";

        if ($ignore) {
            $statement .= " IGNORE";
        }

        $statement .= " INTO `" . $tableName . "`";
        $statement .= " (";

        for ($x = 0; $x < sizeof($columns); $x++) {
            if ($x > 0) {
                $statement .= ', ';
            }
            $statement .= $columns[$x];
        }

        $statement .= ")";
        $statement .= " values (";

        for ($x = 0; $x < sizeof($data); $x++) {
            if ($x > 0) {
                $statement .= ', ';
            }
            $statement .= "?";
        }

        $statement .= ")";

        try {
            $insert = $this->link->prepare($statement);
            $insert->execute($data);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    //--------------------------------------------------------------------------


    public function updateOne($tableName, $column, $data, $where, $condition)
    {
        $statement = "UPDATE";

        $statement .= " `" . $tableName . "`";
        $statement .= " SET `";

        $statement .= $column . "`";
        $statement .= ' = ';
        $statement .= "?";

        $statement .= " WHERE `" . $where . "` = ?";

        try {
            $update = $this->link->prepare($statement);
            $update->execute(array($data, $condition));
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }
    //--------------------------------------------------------------------------


    /**
     * @throws Exception
     */
    public function getArray($statement, $params = [])
    {
        if (!$this->connected) {
            throw new Exception("Not connected to the database.");
        }

        try {
            $sql = $this->link->prepare($statement);
            $sql->execute($params);
            $results = $sql->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }

        return !empty($results) ? $results : [];
    }
}
