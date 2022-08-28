<?php

namespace Engine\Controllers;

interface NewsControllerInterface extends RouterActionInterface
{
    public function actionView($category, $id);
}