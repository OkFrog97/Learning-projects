<?php
class autorisation
{

    protected $userLog;
    protected $userPass;
    protected $userAutorisationInfo;

    //db connection settings
    protected $localhost;
    protected $username;
    protected $password;

    function __construct($userLog, $userPass)
    {
        $this->userLog = $userLog;
        $this->userPass = $userPass;
        $this->userAutorisationInfo = $userLog . ':' . $userPass;
    }

    private function logFinder()
    {
        /*
         * Return data from db.
         * Work with real db must be here.
         */

        $dbh = new PDO('mysql:host=localhost;dbname=test_shema', $this->username, $this->password);
        return $dbh;

        /*
        $handle = fopen("db.txt", "a+");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                if (stripos($line, $this->userLog) !== false) {
                    $userData = explode(':', $line);
                    return $userData;
                }
            }
        }
        */

    }
    public function getAutorisation ()
    {
        /*
         * return True sting if autorisation is succsessfuuuule.
         * Should be boolean?
         */
        $userData = $this->logFinder();

        foreach($userData->query('SELECT  username, password from users') as $row) {

            //Проверяем построчно то, что вернула ДБ на соответствие логину и паролю
            //Нужно найти более эффектиный способ
            if (($row['username']===$this->userLog)&&($row['password']===$this->userPass)){
                session_start();
                $_SESSION['autorisation'] = 'True';
                return 'True';
            }
            return "False";

        }
        $dbh = null;












       /*
        if (($this->userLog === $userData[0]) && ($this->userPass === str_replace(PHP_EOL, '', $userData[1]))) {
            session_start();
            $_SESSION['autorisation'] = 'True';
            return 'True';
        } else {
            return 'False';
        }
       */
    }

}