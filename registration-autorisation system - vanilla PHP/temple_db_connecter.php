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

    $stmp = $dbh->prepare("INSERT INTO users VALUES (:username, :password)");
    $stmp->bindParam(':username', $addname);
    $stmp->bindParam(':password', $addpass);

    //test added values 1
    $addname = 'nagibator';
    $addpass = '123456789';
    $stmp->execute();

    //test added values 2
    $addname = 'nagibator';
    $addpass = '123456789';
    $stmp->execute();

    $dbh = null;

    echo '<p>data add to database</p><br>';
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
