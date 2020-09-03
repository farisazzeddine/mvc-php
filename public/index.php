<?php
namespace PHPMVC;

use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\Language;
use PHPMVC\LIB\SessionManager;
use PHPMVC\LIB\Template;

if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}
require_once '..' . DS . 'app' . DS .'config'.DS. 'config.php';
require_once APP_PATH . DS . 'lib'. DS . 'autoload.php';
$session=new SessionManager();
$session->start();
$template_parts = require_once '..' . DS . 'app' . DS .'config'.DS. 'templateconfig.php';


if (!isset($_SESSION['lang'])){
$_SESSION['lang']=APP_DEFAULT_LANGUAGE;

}

$template = new Template($template_parts);
$language = new language();
$frontController = new FrontController($template, $language);
$frontController->dispatch();
