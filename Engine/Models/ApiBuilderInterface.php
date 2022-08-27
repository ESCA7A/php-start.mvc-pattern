<?php

namespace Engine\Models;

interface ApiBuilderInterface
{
    public function getData($table): void;
}