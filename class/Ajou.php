<?php
require "Dbase.php";
class Ajou{
    private $pdo;
    public $prix;
    public $stock;
    public $déscription;

    public function save()
    {
        $pdo = new Dbase();
        $data = $pdo->getPdo()->prepare("INSERT INTO 'produits'('prix','stock','déscription') VALUES (?, ?, ?) ");
        $data->execute([$this->prix,$this->stock,$this->déscription]);
    }
}
