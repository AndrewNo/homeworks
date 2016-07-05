<?php

class DB
{
    protected  $connection;
    protected static $db = null;

    private function __construct()
    {
        $this->connection =
            new mysqli(HOST, USER, PASSWORD, DB_NAME);

        if (mysqli_connect_error()) {
            throw new Exception('Could not connect to DB');
        }
    }

    public static function getConnection()
    {
        if (self::$db === null) {
            self::$db = new DB();
            return self::$db;
        } else {
            return self::$db;
        }
    }

    public function query($sql)
    {
        if (!$this->connection) {
            return false;
        }

        $result = $this->connection->query($sql);

        if (mysqli_error($this->connection)) {
            throw new Exception(mysqli_error($this->connection));
        }

        if (is_bool($result)) {
            return $result;
        }

        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
        
    }

    public function escape($str)
    {
        return mysqli_escape_string($this->connection, $str);
    }

}

