<?php

//get user task information
$task = $_POST["task"];


//functions
function isValid ($sendData)
{
    if ($sendData == '') {
        echo "Input task";
        return False;
    }
    return True;
}


function dbConnect ($sendData){
    $dsn = "mysql:host=localhost;dbname=todo_list";
    $pdo = new PDO ($dsn, 'root', '');

    $sql = 'INSERT INTO tasks(task) VALUES(:task)';




}