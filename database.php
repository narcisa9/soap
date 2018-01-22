<?php
class Database{
	private $connection;

    public function __construct() {

        $this->connection = mysqli_connect('mysql.hostinger.ro', 'u611714577_soap', 'soap@123','u611714577_soap') or die("Error " . mysqli_error($con));

        if (!$this->connection) {
             throw new Exception('Probleme  la conectare baza de date');
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}