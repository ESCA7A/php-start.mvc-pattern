<?php

namespace Engine\Models\Singleton;

use Engine\Models\Singleton\Pdo_Singleton\DbSingletonPdo;
use Engine\Models\ApiDataBuilder\CustomersInterface;

class CustomersPdoInstance extends DbSingletonPdo implements CustomersInterface
{
    private PDO $pdo;

    public function __CONSTRUCT()
    {
        $this->pdo = DbSingletonPdo::getInstance();
        $sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
        $this->pdo::exec($sql);
    }

    public function setId($id)
    {
        return $id;
    }

    public function getId()
    {
    }

    public function setFirstname()
    {
    }

    public function getFirstname()
    {
    }

    public function setUsername()
    {
    }

    public function getUsername()
    {
    }

    public function setLastname()
    {
    }

    public function getLastname()
    {
    }

    public function setAddress()
    {
    }

    public function getAddress()
    {
    }
}