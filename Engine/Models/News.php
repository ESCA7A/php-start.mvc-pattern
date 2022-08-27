<?php

namespace Engine\Models;

class News extends AbstractDb
{
    public function sayHi()
    {
        for($i = 0; $i < 10; $i++)
        {
            echo "HELLO";

        }
    }
}