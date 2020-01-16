<?php

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
    //vars
    $dsn = "mysql:host=localhost;dbname=todo_list";
    $pdo = new PDO ($dsn, 'root', '');
    $sql = 'INSERT INTO tasks(task) VALUES(:task)';

    //logic
    try {
        $query = $pdo->prepare($sql);
        $query->execute(['task' => $sendData]);
    }
    catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
}


function main ()
{
    //get user task information
    $task = $_POST["task"];

    //db connection


    //redirect to the index
    header ('Location: /');


}

main();