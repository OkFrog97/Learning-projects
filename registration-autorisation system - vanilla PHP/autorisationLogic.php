<?php
//автозагружаем класс
spl_autoload_register( function ($class_name){
    include 'classes'.DIRECTORY_SEPARATOR.$class_name . '.php';
});

$userLog = $_POST['log'];
$userPass = $_POST['pass'];

//registration function

function setRegistration($log, $pass){



    try {
        $dbh = new PDO('mysql:host=localhost;dbname=test_shema', $username, $password);

        //Готовим запрос
        $stmp = $dbh->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

        //вставляем параменты запроса и отправляем его
        $params = [
            ':username'=> 'jehny',
            ':password'=> '0987654321',
        ];
        $stmp->execute($params);

        $dbh = null;

        echo '<p>data add to database</p><br>';

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();









}