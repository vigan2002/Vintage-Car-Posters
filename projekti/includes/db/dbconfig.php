<?php

class DBconfig
{

    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $db = "bum";

    protected function db()
    {
        try {
            $pdo = new PDO("mysql:host=$this->dbhost;dbname=$this->db", $this->dbuser, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "ERROR in PDO" . $e->getMessage();
        }
    }
    public function secinput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
  
        return $data;
      }
}

