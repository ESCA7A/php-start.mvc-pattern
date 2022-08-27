<?php

namespace Engine\Models\Pdo_Singleton;

use PDO;

interface ApiConnectInterface
{
    public function db_connect(): PDO;
}
