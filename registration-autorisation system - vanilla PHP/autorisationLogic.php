<?php
//автозагружаем класс
spl_autoload_register( function ($class_name){
    include 'classes'.DIRECTORY_SEPARATOR.$class_name . '.php';
});

$userLog = $_POST['log'];
$userPass = $_POST['pass'];

//registration function

function setRegistration($log, $pass){













}