<?php

if(!in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])){
    defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
    defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'dgate_semsarak');
    defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', 'semsarak@2018');
    defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'dgate_semsarak');
    defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
    defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 1);
} else {
    defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
    defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
    defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', 'rebo');
    defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'semsarak');
    defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
    defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 1);
}