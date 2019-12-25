<?php

//class for simple work with data bases

class db
{
    // database settings
    private $username = 'root';
    private $password = '';


    public function getAutorisation($log, $pass){

        //db function Вместо всего этого вернуть массив логинов и паролей или просто сравнить полученные
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=test_shema', $username, $password);
            foreach($dbh->query('SELECT username, password FROM users;') as $row){
                if ( ($row['username']==$log)&&($row['password'])==$pass){

                    //работа с сессиями ВРЕМЕННО
                    session_start();
                    $_SESSION['autorisation'] = 'True';

                    return 'True';
                }
            }
            return "False";

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }





















}