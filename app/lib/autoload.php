<?php
namespace PHPMVC\LIB;

class AutoLoad
{
    private function __construct() {}
    private function __clone() {}

    private static function autoload($className)
    {
        $className = str_replace('PHPMVC', '', $className);
        $className = str_replace('\\', '/', $className);
        $className = $className . '.php';
        $className = strtolower($className);

        $appPath = realpath(dirname(__FILE__)) . DS . '..';

        if(file_exists($appPath . $className)) {
            require_once $appPath . $className;
        }
    }

    public static function registerAutoloader()
    {
        spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');
    }
}