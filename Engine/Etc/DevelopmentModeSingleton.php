<?php

namespace Engine\Etc;

final class DevelopmentModeSingleton
{
    private static ?DevelopmentModeSingleton $instance = null;

    private function __CONSTRUCT($mode)
    {
        $this->setMode($mode);
    }

    /**
     * @param string $mode
     * @return void
     */
    private function setMode(string $mode): void
    {
        try
        {
            $mode1 = $mode;

            if(empty($mode1))
                throw new \Exception(
                    "Не указан режим использования <pre> обратитесь к системному администратору"
                );

            if ($mode1 === 'developer'){
                error_reporting(-1);
                ini_set('display_errors', 1);
                return;
            }

            if ($mode1 === 'production'){
                error_reporting(0);
                ini_set('display_errors', 0);
                return;
            }
        }catch (\Exception $e)
        {
            $e->getMessage();
        }
    }

    static public function getInstance($mode): DevelopmentModeSingleton
    {
        if(self::$instance === null)
        {
            self::$instance = new self($mode);
        }
        return self::$instance;
    }

    private function __CLONE(){}
}