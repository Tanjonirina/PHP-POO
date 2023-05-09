<?php
require 'class/Ajouteur.php';


if (isset ($_POST["submit"])){
    
    $nom = $_POST["nom"];
    $prix = $_POST["prix"];
    $stock = $_POST["stock"];

    $produit = new Ajouteur();
    $produit->save($nom,$prix,$stock);

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../rs/bootstrap@5.0.0-alpha2.min.css">

   <!-- Bootstrap -->
   <link rel="stylesheet" href="rs/bootstrap@5.0.0-alpha2.min.css">

   <title> PRODUITS AJOUTEUR</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      ajouteur votre Produits
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add product</h3>
         <p class="text-muted">Complete the form below to add a new product</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Nom du Produits:</label>
                  <input type="text" class="form-control" name="nom" placeholder="nom">
               </div>

               <div class="col">
                  <label class="form-label">prix de Produits:</label>
                  <input type="text" class="form-control" name="prix" placeholder="prix de produits">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">stock:</label>
               <input type="number" class="form-control" name="stock" placeholder="nombre de stock">
            </div>

           

            <div>
               <button type="submit" class="btn btn-success" name="submit" href="index.php">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
