<?php

//test connection

// database settings
$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test_shema', $username, $password);
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}