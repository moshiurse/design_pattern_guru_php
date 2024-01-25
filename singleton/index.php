<?php


require_once('./Logger.php');
require_once('./Config.php');

Logger::log("Started!!");

$l1 = Logger::getInstances();
$l2 = Logger::getInstances();

if ($l1 === $l2) {
    Logger::log("Logger has a single instance.");
} else {
    Logger::log("Loggers are different.");
}

$config1 = Config::getInstances();
$login = "test_login";
$password = "test_password";
$config1->setValue('login', $login);
$config1->setValue("password", $password);

$config2 = Config::getInstances();
if($login == $config2->getValue("login") && $password == $config2->getValue("password")){
    Logger::log("Config singleton also works fine.");
}

Logger::log("Finished!");