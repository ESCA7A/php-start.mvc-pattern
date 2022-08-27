<?php

namespace Engine\Models\Singleton\Pdo_Singleton;

class DbSingletonPdo implements ApiConnectInterface
{
    private array $env;
    private static ?DbSingletonPdo $instance = null;

    private function __CONSTRUCT()
    {
        $this->env = require __DIR__ . "/../../../Etc/.env.php";
        $this->db_connect();
    }

    public function db_connect()
    {
        try {
            $conn = new \PDO(
                'mysql:host='.$this->env['host'].
                ';dbname='.$this->env['db_name'],
                $this->env['name'],
                $this->env['pass']
            );
            $conn->exec("SET NAMES 'utf8' ");
        } catch (\PDOException $e)
        {
            echo "При подключении к базе данных возникла ошибка: " . $e->getMessage();
        }
    }

    /**
     * Если объект класса не существует, создаем класс
     * в противном случае возвращаем подключение
     *
     * @return DbSingletonPdo
     */
    public static function getInstance(): DbSingletonPdo
    {
        if (self::$instance === null)
            {
                self::$instance = new self();
            }
        return self::$instance;
    }

    private function __clone()
    {
    }

}