<?php

require_once "Dbase.php";


class commande{

    public $numero;
    public $nombre;

  
    public function commande(){
        $db = newDbase();
        $sql->$db->getpdo()->prepare('INSERT INTO facture(numero,nombre) VALUES (?,?)');
        $sql->execute(array($this->num_P,$this->nbr_p));
    }
}

if (isset ($_POST["submit"])){
    
    $num_P = $_POST["num_P"];
    $nbr_P = $_POST["nbr_P"];
  

    $produit = new commande();
    $produit->save($numero,$nombre);
 

}







?>

<div class="input-group-prepend">
<form action="commande.php" method="post">
    <input type="text" placeholder="id" name="num_P">
    <input type="text" placeholder="nombre de commande" name="nbr_P" >
    <input type="submit" class="btn btn-primary" name="submit" value="commande">

    <tfoot>
   <a  class="btn btn-warning" href="facture.php">Facture</a>
</tfoot>

</div>
</form>

