<?php
class Dbase {
    
    private $pdo;
    protected $dns="localhost";
    protected $dbname="produits";
    protected $username="root";
    protected $password ="";

    public function __construct()
    {
        $this->pdo= new PDO("mysql:host={$this->dns}; dbname={$this->dbname};charset=utf8",$this->username,"");
    }

    
   public function getPdo() {

    return $this->pdo;
   }

}

