<?php

//functions
function isValid ($sendData)
{
    if ($sendData == '') {
        return False;
    }
    return True;
}


function dbConnect ($sendData){
    //connect with db
    require 'configDB.php';

    //SQL queries
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



 //get user task information
$task = $_POST["task"];

 //db connection
if (isValid($task)){
     dbConnect($task);
}
else{
    echo 'Input is empty';
}

//redirect to the index
header ('Location: /training projects/toDo list/');



