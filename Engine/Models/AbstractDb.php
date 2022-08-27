<?php

namespace Engine\Models;

abstract class AbstractDb
{
    private string $hostName;
    private string $databaseUsername;
    private string $databasePassword;
    private string $databaseName;
}