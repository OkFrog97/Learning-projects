<?php
class autorisation
{

    protected $userLog;
    protected $userPass;
    protected $userAutorisationInfo;

    function __construct($userLog, $userPass)
    {
        $this->userLog = $userLog;
        $this->userPass = $userPass;
        $this->userAutorisationInfo = $userLog . ':' . $userPass;
    }

    private function logFinder()
    {
        $handle = fopen("db.txt", "a+");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                if (stripos($line, $this->userLog) !== false) {
                    $userData = explode(':', $line);
                    return $userData;
                }
            }
        }
    }

    public function getAutorisation ()
    {
        /*
         * return True sting if autorisation is succsessfuuuule.
         * SHould be boolean?
         */
        $userData = $this->logFinder();
        if (($this->userLog === $userData[0]) && ($this->userPass === str_replace(PHP_EOL, '', $userData[1]))) {
            session_start();
            $_SESSION['autorisation'] = 'True';
            return 'True';
        } else {
            return 'False';
        }
    }
}