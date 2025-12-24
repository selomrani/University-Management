<?php
class dbh{
    private $host ='localhost';
    private $user ='root';
    private $pwd ='';
    private $dbName ='university';

    public function connect(){
        try {
            $dsn ='mysql:host='.$this->host . ';dbname=' . $this->dbName;
            $conn = new PDO($dsn, $this->user, $this->pwd);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "database are connected!";
        } catch (Exception $th) {
            "that connection is fiels".$th->getMessage();
        }
        return $conn;
    }
}