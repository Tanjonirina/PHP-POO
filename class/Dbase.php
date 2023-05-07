<?php
class Dbase{
    private $pdo;
    protected $dns="localhost";
    protected $dbname="produits";
    protected $username="root";
    protected $password ="";

    public function __construct()
    {
        $this->pdo= new PDO("mysql:host={$this->dns}; dbname={$this->dbname} ",$this->username,$this->password);
    }
   public function getPdo() {

    return $this->pdo;
   }

}

