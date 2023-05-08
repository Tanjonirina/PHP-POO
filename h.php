<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require 'class/Ajouteur.php';


if (isset ($_POST["submit"])){
    
    $nom = $POST["nom"];
    $prix = $POST["prix"];
    $stock = $POST["stock"];

    $produit = new save();
    $produit -> save($nom,$prix,$stock);

}

?>
<body>
    <form action="" method="post">
        <input type="text" name="nom">
        <input type="text" name="prix">
        <input type="text" name="stock">
        <button type="submit">ok</button>
    </form>
</body>
</html>