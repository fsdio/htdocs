<?php
require 'config.php';
class Database{
    private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbnm = DB_NAME;
    private $dbh;
    private $stmt;
    public function __construct()
    {
        {
            try {
                $dsn = 'mysql:host='. $this->host .';dbname='. $this->dbnm;
                $this->dbh = new PDO($dsn,$this->user,$this->pass);
                // set the PDO error mode to exception
                $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully </br>";
              } catch(PDOException $e) {
                // echo "Connection failed: " . $e->getMessage()."</br>";
              }
        }
    }
    
	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}
    public function execute()
	{
		$this->stmt->execute();

	}

	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

