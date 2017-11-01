<?php

use Medoo\Medoo;

class DataBaseModel
{
    protected $connection;

    /**
     * DataBaseModel constructor.
     */
    public function __construct()
    {
        $this->setConnection();
    }

    /**
     * @return array
     */
    public function setConnection()
    {
        $config = [
            // required
            'database_type' => 'mysql',
            'database_name' => 'lumen',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',

            // [optional]
            'charset' => 'utf8',
            'port' => 3306,
        ];
        return $this->connection = $config;
    }

    /**
     * @return Medoo
     */
    public function db()
    {
        $db = new Medoo(self::getConnection());
        return $db;
    }

    /**
     * @return mixed
     */
    protected function getConnection()
    {
        return $this->connection;
    }
}
