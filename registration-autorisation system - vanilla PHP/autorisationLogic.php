<?php
//автозагружаем класс
spl_autoload_register( function ($class_name){
    include 'classes'.DIRECTORY_SEPARATOR.$class_name . '.php';
});

$userLog = $_POST['log'];
$userPass = $_POST['pass'];

//registration function

function getAutorisation($log, $pass){

    // database settings
    $username = 'root';
    $password = '';

    //db function
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=test_shema', $username, $password);
        foreach($dbh->query('SELECT username, password FROM users;')){
            if ( ($row['username']==$log)&&($row['password'])==$pass){
                return 'True';
            }
        }
        return "False";

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

echo getAutorisation($userLog, $userPass);
