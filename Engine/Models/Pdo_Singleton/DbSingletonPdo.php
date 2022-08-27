<?php

namespace Engine\Models\Pdo_Singleton;

class DbSingletonPdo
{
    private array $env;
    private static ?DbSingletonPdo $instance;

    private function __CONSTRUCT()
    {
        $this->env = require __DIR__. "/../../Etc/.env.php";
        $this->db_connect();
    }

    public function db_connect()
    {
        try {
            $conn = new \PDO(
                'mysql:host='.$this->env['host'].
                ';dbname='.$this->env['name'],
                $this->env['name'],
                $this->env['pass']
            );
            $conn->exec('SET NAMES UTF-8');
            throw new \Exception('database data incorrect :(');
        } catch (\PDOException $e)
        {
            echo "При подключении к базе данных возникла ошибка: " . $e->getMessage();
        }
    }

    /**
     * Если объект класса не существует, создаем класс
     * в противном случае возвращаем подключение
     *
     * @return DbSingletonPdo|null
     */
    public static function getInstance() : ?DbSingletonPdo
    {
        if (self::$instance === null)
            {
                self::$instance = new self;
            }
        return self::$instance;
    }
}