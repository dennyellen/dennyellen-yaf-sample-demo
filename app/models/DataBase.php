<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 17-10-20
 * Time: 下午4:04
 */
use Medoo\Medoo;

class DataBaseModel
{
    private function init($config)
    {
        // Initialize
        $database =  new Medoo($config);
        return $database;
    }
    public function Connection()
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
        $db = $this->init($config);
        return $db;
    }
}