<?php

namespace Engine\Models\Singleton\Pdo_Singleton;

interface ApiConnectInterface
{
    static public function getInstance(): DbSingletonPdo;
}
