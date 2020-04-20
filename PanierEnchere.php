
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PanierEnchere</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="EbayECE.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>


<body>

 <?php include("Menu.php"); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="PanierAchatImmediat.php">Achat Immédiat</a></p>
      <p><a href="PanierNegociation.php">Négociation</a></p>
      <p><a href="PanierEnchere.php">Enchère</a></p>
    </div>
    <div class="col-sm-8 text-center"> 

 <?php
     
     $database1 = "ebayece";
     //connectez-vous dans votre BDD
     //Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
      $db_handle = mysqli_connect('localhost', 'root', '');
      $db_found = mysqli_select_db($db_handle, $database1);
      $sql="SELECT * FROM enchere  WHERE enchere_IDAcheteur = 6";
      $result = mysqli_query($db_handle, $sql);

      //on trouve le livre recherché
      while ($data = mysqli_fetch_assoc($result)) {
      
      
     


$tampon=$data['enchere_IDItem'];
$itemID="SELECT * FROM item WHERE item_ID=( '$tampon')";


$resultat = mysqli_query($db_handle, $itemID);
$item = mysqli_fetch_assoc($resultat);
$tampon2=$item['item_Nom'];
echo "$tampon2";

$tampon1=$item['item_IDVendeur'];
$vendeurID="SELECT * FROM vendeur WHERE vendeur_ID=( '$tampon1')";
$resultat_Vendeur = mysqli_query($db_handle, $vendeurID);
$vendeur = mysqli_fetch_assoc($resultat_Vendeur);
?>
<div class="container mt-3">
  <div class="media border p-0">
    <?php print'  <img src="image/'.$item['item_Photo'].'" class="mr-3 mt-0" style="width:220px;">';?>
    <div class="media-body">

      
        <?php
      print'<h4>'.$item['item_Nom'].'</h4>
      <h8><i>Categorie : '.$item['item_Categorie'].'<br>Type de vente: '.$item['item_TypeVente'].'</i></h8>
       
      <p><small>' .$item['item_TypeVente'].' </small></p>

      
     <h6>Vendeur: '.$vendeur['vendeur_Pseudo'].' <br>Max allowed: '.$data['enchere_PrixMax'].' <br><b>Actual Price: ' .$item['item_Prix'].'  </b></h6>
      ';
      
      ?>
      <div class="emplacement_boutons_item">

        
        
          <form action="EnchereMax.php" class="form-container">
            
          
            <input type="number" placeholder="Enchere_Max" name="Enchere_Max" style="width: 115px;" required >
            <?php 
              // UPDATE enchere SET enchere_PrixMax = '$prixmax' WHERE enchere_ID= '$data['enchere_ID']'
            ?> 

            <button class="bouton_item" type="submit" name="button1" value= "<?php echo $data['enchere_ID']  ;?>" style="background-color: green; border-color: green; color: white;">Valider</button>
            <button class="bouton_item" type="button" onclick="closeForm()" style="background-color: red; border-color: red; color: white;">Annuler</button>

          </form>
        
          

      </div>
    </div>     
  </div>
</div> 

<?php   
}

mysqli_close($db_handle);
?>  
     
      
      



    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" id='footer'>
  <p><br>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
