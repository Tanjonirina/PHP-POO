<?php
// include "class/Dbase.php";
require "class/Ajouteur.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rs/bootstrap@5.0.0-alpha2.min.css">
    <title>Document</title>
</head>
<body>


   

    <div class="container-fluid">
        <table class="table">
            <head>Nos Produits</head>
          <div class="container">
            <a  class="btn btn-info" href="ajou.php">ajouteur</a>
        </div>
        
          
            
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>prix</th>
                    <th>stock</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $data = new Ajouteur();
            $data->SelectAll();
            ?>
            </tbody>


        </table>
    </div>
<div class="input-group-prepend">
    <input type="text" placeholder="tanjona" name="id" >
    <input type="text" placeholder="tanjona" name="id" >
    <input type="button" class="btn btn-primary" value="commander">
</div>
<tfoot>
   <a  class="btn btn-warning" href="facture.php">Facture</a>
</tfoot>
    
</body>
</html>