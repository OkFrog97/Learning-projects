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



    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
