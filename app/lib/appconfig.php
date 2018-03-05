<?php
namespace PHPMVC\LIB;

class AppConfig
{
    private static $_instance;

    private function __construct() { }

    private function __clone() { }

    public static function getInstance() : self
    {
        return self::$_instance === null ? new self() : self::$_instance;
    }

    public function loadAppConfiguration()
    {
        $configurationFilesPath = realpath(dirname(__FILE__)) . DS . '..' . DS . 'config' . DS;
        $basicConfigurationList = ['general.php', 'paths.php'];

        if(file_exists($configurationFilesPath)) {
            if ($handle = opendir($configurationFilesPath)) {
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != '.' && $entry != '..') {
                        require_once $configurationFilesPath . $entry;
                    }
                }
                closedir($handle);
            }
        }
    }
}