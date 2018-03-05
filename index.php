<?php
namespace PHPMVC;

use PHPMVC\LIB\AppConfig;
use PHPMVC\lib\Authentication;
use PHPMVC\LIB\AutoLoad;
use PHPMVC\lib\CSRFSecHandler;
use PHPMVC\lib\Messenger;
use PHPMVC\Lib\Registry;
use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\Language;
use PHPMVC\LIB\SessionManager;
use PHPMVC\LIB\Template\Template;

if(!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

require_once 'app' . DS . 'lib' . DS . 'autoload.php';
AutoLoad::registerAutoloader();

$appConfig = AppConfig::getInstance();
$appConfig->loadAppConfiguration();

$session = new SessionManager();
$session->start();
$session->setLanguage();

$template = new Template();

$language = new Language();

$csrfToken = CSRFSecHandler::getInstance();
$csrfToken->setupToken();

$messenger = Messenger::getInstance($session);

$authentication = Authentication::getInstance($session);

$registry = Registry::getInstance();
$registry->session = $session;
$registry->language = $language;
$registry->messenger = $messenger;

$frontController = new FrontController($template, $registry, $authentication);
$frontController->dispatch();
