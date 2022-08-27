<?php

namespace Engine\Models\Singleton;

use Engine\Models\Singleton\Pdo_Singleton\DbSingletonPdo;
use Engine\Models\ApiDataBuilder\CustomersInterface;

class CustomersPdoInstance extends DbSingletonPdo implements CustomersInterface
{
    private PDO $pdo;

    public function __CONSTRUCT()
    {
        $this->pdo = new PDO();
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