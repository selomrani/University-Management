<?php
class TestConnection
{
    private $host = 'mysql';
    private $user = 'root';
    private $pwd = '';
    private $dbName = 'University';

    public function connect()
    {
        $conn = null;
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $conn = new PDO($dsn, $this->user, $this->pwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $th) {
            die("Database Error: " . $th->getMessage());
        }
        return $conn;
    }
}
