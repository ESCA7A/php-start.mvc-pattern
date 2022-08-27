<?php

namespace Engine\Models\Pdo_Singleton;

class DbSingletonPdo
{
    private array $env;
    private $instance;

    public function __CONSTRUCT()
    {
        $this->env = require "../../Etc/.env.php";
        echo $this->env;
        #$this->db_connect();
    }

    public function db_connect()
    {
//        try {
//            $conn = new \PDO(
//                'mysql:host='.$this->env['host'];
//                'dbname='.$this->env['name'],
//                $this->env['user'],
//                $this->env['pass']
//            );
//            $conn->exec('SET NAMES UTF-8');
//            throw new \Exception('database data incorrect :(');
//        } catch (\Exception $e)
//        {
//            $e->getMessage();
//        }
    }
}