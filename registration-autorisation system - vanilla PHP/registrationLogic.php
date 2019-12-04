<?php
//автозагружаем класс
spl_autoload_register( function ($class_name){
    include 'classes'.DIRECTORY_SEPARATOR.$class_name . '.php';
});

$r = new registration($_POST['log'], $_POST['pass'], $_POST['repPass']);

echo $r->getRegistration();

