<?php
require "Dbase.php";

class Ajouteur extends Dbase
{
   private $nom;
   private $prix;
   private $stock;

   public function save($n,$p,$s){

      $this->nom=$n;
      $this->prix=$p;
      $this->stock=$s;

      $creat = new Dbase();
      $data= $this->getPdo()->prepare("INSERT INTO `products`(`nom`, `prix`, `stock`) VALUES (?,?,?)");
      $data->execute(array($n,$p,$s));

      header("Location: index.php");


   }

   public function SelectAll()
{
    $select = $this->getPdo()->prepare("SELECT * FROM products");
    $select->execute();
  
    while($donnee = $select->fetch(PDO::FETCH_OBJ)) {
        $id = $donnee->id;
        $nom = $donnee->nom;
        $prix = $donnee->prix;
        $stock = $donnee->stock;
    
        echo "<tr>
                  <td>$id</td>
                  <td>$nom</td>
                  <td>$prix</td>
                  <td>$stock</td>
              </tr>";
    }
}

    
      // var_dump($donnee);
   }
   
  



    
   
 
?>




