<?php

//test connection

$servername = 'localhost';
$username = 'root';
$password = '';

$dbConn = new mysqli($servername, $username, $password,'test_shema');

if ($dbConn->connect_error){
    die('Connect filed: '.$dbConn->connect_error);
}
else {
    $res = $dbConn->query("SELECT * FROM users");
    var_dump($res->fetch_all());
}