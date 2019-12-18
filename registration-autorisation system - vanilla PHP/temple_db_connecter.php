<?php

//test connection

// database settings
$servername = 'localhost';
$username = 'root';
$password = '';

//test login and pass
$login = 'fred';
$pass = 'qwerty';


try {
    $dbh = new PDO('mysql:host=localhost;dbname=test_shema', $username, $password);
    foreach($dbh->query('SELECT  username, password from users') as $row) {

        //Проверяем построчно то, что вернула ДБ на соответствие логину и паролю
        //Нужно найти более эффектиный способ
        if (($row['username']===$login)&&($row['password']===$pass)){
            print_r("True! <br>");
        }
        else {
            print_r("False! <br>");
        }

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}