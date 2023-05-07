<?php
require 'class/ajout.php';






if (isset ($_POST["submit"])){
    $prix=$POST ['prix'];
    $stock=$POST ['stock'];
    $déscription=$POST ['déscription'];

   $sql ="INSERT INTO `produits`(`prix`,`stock`,`déscription`) VALUES (?,?,? ) ";
   $sql>execute(array($this->prix, $this->stock, $this->déscription));

   if ($result) {
    header("Location: index.php?msg=New record created successfully");
 } else {
    echo "Failed: " . mysqli_error($conn);
 }

}

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
    <center>
        <form action="" method="post">
        <div class="tab">
        <thead>
            <tr>
                <th>
                <label for="" class="mr-sm2 mb-0" for="prix de Produits" >Prix de produits</label>
                    
                </th>
            </tr>
        </thead>

        </div>
           
            <input type="text" class="form-control mr-sm-2 mb-2 mb-sm-0" id="prix" name="prix">
    </section>
   
       
        </div>

        <div class="tab">
        <thead>
            <tr>
                <th>
                <label for="" class="mr-sm2 mb-0" for="stock">stock</label>
                    
                </th>
            </tr>
        </thead>

        </div>

        
           
            <input type="text" class="form-control mr-sm-2 mb-2 mb-sm-0" id="stock" name="stock">
    </section>
   
       
        </div>

        <div class="tab">
        <thead>
            <tr>
                <th>
                <label for="" class="mr-sm2 mb-0" for="prix de Produits">déscription</label>
                    
                </th>
            </tr>
        </thead>

        </div>

        
           
            <input type="text" class="form-control mr-sm-2 mb-2 mb-sm-0" id="prix" name="déscription">
    </section>
   
       
        </div>
        <br>
        <br>

        <div class="input-group-prepend">
        
        <input type="submit" name="submit" class="btn btn-primary" value="commander">

        </div>

        </form>
        
       
        
  

  

  

 
            
    </center>
  
  
    
            
            
        
 

    

</div>
</body>
</html>