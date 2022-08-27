<?php

namespace Engine\Models;

class News extends BaseModel
{
    public function __CONSTRUCT()
    {
        $this->getData('customers');
    }

    public function sayHi()
    {
        for($i = 0; $i < 10; $i++)
        {
            echo "<pre>";
            echo "HELLO, I AT: ".__FILE__;

        }
    }

    public function getData($table)
    {
        $query = "INSERT INTO $table(first_name, last_name, username)VALUES('Pavel', 'Tankov', 'esca7a')";
        #$pdo = \Engine\Models\Singleton\Pdo_Singleton\DbSingletonPdo::getInstance();
        #$pdo->exec("$query");
    }

}