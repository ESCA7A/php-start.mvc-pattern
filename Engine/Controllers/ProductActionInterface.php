<?php

namespace Engine\Controllers;

interface ProductActionInterface extends RouterActionInterface
{
    /**
     * @return mixed
     */
    public function actionList($category, $id);
}