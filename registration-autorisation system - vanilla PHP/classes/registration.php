<?php

class registration {

    protected $userLog;
    protected $userPass;
    protected $userRepPass;

    function __construct($userLog, $userPass, $userRepPass)
    {
        $this->userLog = $userLog;
        $this->userPass = $userPass;
        $this->userRepPass = $userRepPass;
    }


    public function getRegistration () {
        if ($this->userPass === $this->userRepPass){
            $message = $this->userLog.':'.$this->userPass.PHP_EOL;





            $handle = fopen("db.txt", "a+");
            fwrite($handle, $message);
            fclose($handle);
            session_start();
            $_SESSION['autorisation'] = 'True';








            return "Registration is done. Welcome.";
        }
        else {
            return "Passwords is not equal. Try again";
        }
    }
}