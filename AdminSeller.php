<?php

session_start();
$_SESSION['TypeUser']="admin";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="EbayECE.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

 <?php include("Menu.php"); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
       <form action="AdminSeller.php" method="post">
        <table>

          <tr>
            <td><input type="text" placeholder="Recherche" name="recherche"></td>
          </tr>

          <tr>
            <td align="left" ><br>
          </tr>
          <tr>
            <td><br><input type="submit" class="bouton_volet_recherche" name="button1" value="Rechercher" ></td>
          </tr>
          

        </table>
      </form>
    </div>


    <div class="col-sm-8 text-center"> 

    <?php




$button1 = isset($_POST["button1"])? $_POST["button1"] : "";
$recherche = isset($_POST["recherche"])? $_POST["recherche"] : "";

$tampon=0;
//identifier votre BD
$database = "ebayece";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//si le bouton est cliqué
if (isset($_POST['button1'])) {
  if ($db_found) {
    $sql = "SELECT * FROM vendeur WHERE vendeur_Pseudo = '$recherche";
    
   
    
    $result = mysqli_query($db_handle, $sql);
//tester s'il y a de résultat
    if (mysqli_num_rows($result) == 0) {
//l'item' recherché n'existe pas
      echo "Item not found";
    } else {
//on trouve l'item'recherché
      while ($data = mysqli_fetch_assoc($result)) {
        
        $_SESSION['sql']=$sql;
?>
       
          <div class="container mt-3">
  <div class="media border p-0">
    <?php print'  <img src="image/'.$data['vendeur_Photo'].'" class="mr-3 mt-0" style="width:220px;">';?>
    <div class="media-body">

      
        <?php
      print'<h4> Pseudo :'.$data['vendeur_Pseudo'].'</h4>
      <h8><i> Mail : '.$data['vendeur_Mail'].'<br></i></h8>  
      <h6> 
      ';
      
      ?>
      <div class="emplacement_boutons_item">

  <input type="button" class="bouton_item" onclick="location.href='./SupprimerItemAdmin.php?id_supprimer= <?php echo $data['item_ID']  ;?>'" value="Supprimer" style="background-color: red; border-color: red; color: white; ">


      </div>
    </div>     
  </div>
</div> 

<?php

//Vendeur: '.$vendeur['vendeur_Pseudo'].' 




      }
    }
  } else {
    echo "Database not found";
  }
}

//fermer la connexion
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
