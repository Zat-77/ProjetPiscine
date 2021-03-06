<!DOCTYPE html>
<html lang="en">
<head>
  <title>Produit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="EbayECE.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

  <?php include("Menu.php"); 
   $user_session=1;
        $database = "ebayece";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        $sql = "SELECT * FROM vendeur where vendeur_ID=$user_session";
        $res = mysqli_query($db_handle, $sql);
        $vendeur = mysqli_fetch_assoc($res);

        if ($vendeur['vendeur_Fond']=='Ece') {
          
        print ' <div class="container-fluid text-center background_image1">';
        }
        else    if ($vendeur['vendeur_Fond']=='Loutre') {
          
        print'  <div class="container-fluid text-center background_image2"> '; 
        }
        
        else    if ($vendeur['vendeur_Fond']=='GoodGames') {
          
         print' <div class="container-fluid text-center background_image3">  ';
        }
        else{
            print' <div class="container-fluid text-center ">  ';
        }
        

?>
  <div class="row content">
    <div class="col-sm-2 sidenav">
       <form action="MesObjets.php" method="post">
        <table>

          <tr>
            <td><input type="text" placeholder="Recherche" name="recherche"></td>
          </tr>

          <tr>
            <td align="left" ><br>
              <input  type="checkbox" name="ferraille_ou_tresor" value="ferraille_ou_tresor" /> Ferraille ou trésor <br/>
              <input type="checkbox" name="bon_pour_le_musee" value="bon_pour_le_musee" /> Bon pour le musée  <br/>
              <input type="checkbox" name="accessoire_vip" value="accessoire_vip" /> Accessoire VIP <br/>
              <input type="checkbox" name="meilleur_offre" value="meilleur_offre" /> Meilleur offre <br/>
              <input type="checkbox" name="enchere" value="enchere" /> Enchere <br/>
              <input type="checkbox" name="achat_immediat" value="achat_immediat" /> Achat immédiat <br/>
            </td>
          </tr>
          <tr>
            <td><br><input type="submit" class="bouton_volet_recherche" name="button1" value="Rechercher" ></td>
          </tr>
          

        </table>
      </form>
    </div>


    <div class="col-sm-8 text-center"  > 

      <div class="container mt-3">
       <div class="media border p-0">
        <?php 
       
        print '  <img src="image/'.$vendeur['vendeur_Photo'].'" class="mr-3 mt-0" style="width:220px;">';?>
        <div class="media-body">
          <h4> 
            <?php   print  ''.$vendeur['vendeur_Pseudo'].'' ;?>
          </h4>
        </div>

      </div>
    </div>



    <?php



$ferraille = isset($_POST["ferraille_ou_tresor"])? $_POST["ferraille_ou_tresor"] : "";
$musee = isset($_POST["bon_pour_le_musee"])? $_POST["bon_pour_le_musee"] : "";
$accessoire = isset($_POST["accessoire_vip"])? $_POST["accessoire_vip"] : "";
$meilleur_offre = isset($_POST["meilleur_offre"])? $_POST["meilleur_offre"] : "";
$enchere = isset($_POST["enchere"])? $_POST["enchere"] : "";
$achat_immediat = isset($_POST["achat_immediat"])? $_POST["achat_immediat"] : "";
$button1 = isset($_POST["button1"])? $_POST["button1"] : "";
$recherche = isset($_POST["recherche"])? $_POST["recherche"] : "";



$tampon=0;
//identifier votre BD//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>



//A remplacer par SESSION




//si le bouton est cliqué
if (isset($_POST['button1'])) {
  if ($db_found) {
    $sql = "SELECT * FROM item";
    if ($recherche != "" && $accessoire == "" && $musee == "" && $ferraille == "" &&$meilleur_offre == "" && $enchere == "" && $achat_immediat == "") {

      $sql .= " WHERE item_Nom LIKE '%$recherche%' UNION SELECT * FROM item WHERE item_IDVendeur = (SELECT vendeur_ID FROM vendeur WHERE vendeur_Pseudo LIKE '%$recherche%' )";
      
    }
    if ($ferraille != "") {
//on cherche les items avec categories
      $sql .= " WHERE (item_Categorie = 'ferraille_ou_tresor'";
      if ($accessoire != "") {
        $sql .= " OR  item_Categorie = 'accessoire_vip'";


        
      }
      if ($musee != "") {
        $sql .= " OR  item_Categorie = 'bon_pour_le_musee'";
      }
      $sql .= ")";
    }
    if ($musee != "" && $ferraille == "") {
      $sql .= " WHERE (item_Categorie = 'bon_pour_le_musee'";
      if ($accessoire != "") {
        $sql .= " OR  item_Categorie = 'accessoire_vip'";
      }
      $sql .= " )";
    }
    if ($accessoire != "" && $musee == "" && $ferraille == "") {
      $sql .= " WHERE (item_Categorie = 'accessoire_vip')";
    }
    if ($accessoire == "" && $musee == "" && $ferraille == "") {
      $sql .= " WHERE (item_Categorie)";
    }
    if ($meilleur_offre != "") {
//on cherche les items avec les Type de vente
      $sql .= " AND (item_TypeVente = 'meilleur_offre'";
      if ($achat_immediat != "") {
        $sql .= " OR  item_TypeVente = 'achat_immediat'";


        
      }
      if ($enchere != "") {
        $sql .= " OR  item_TypeVente = 'enchere'";
      }
      $sql .= ")";
    }
    if ($enchere != "" && $meilleur_offre == "") {
      $sql .= " AND (item_TypeVente = 'enchere'";
      if ($achat_immediat != "") {
        $sql .= " OR  item_TypeVente = 'achat_immediat'";
      }
      $sql .= " )";
    }
    if ($achat_immediat != "" && $enchere == "" && $meilleur_offre == "") {
      $sql .= " AND (item_TypeVente = 'achat_immediat')";
    }
    
    $sql .="AND item_IDVendeur='$user_session'";
    $result = mysqli_query($db_handle, $sql);
//tester s'il y a de résultat
    if (mysqli_num_rows($result) == 0) {
//le livre recherché n'existe pas
      echo "Item not found";
    } else {
//on trouve le livre recherché
      while ($data = mysqli_fetch_assoc($result)) {
        
        $_SESSION['sql']=$sql;
?>
       
          <div class="container mt-3">
  <div class="media border p-0">
    <?php print'  <img src="image/'.$data['item_Photo'].'" class="mr-3 mt-0" style="width:220px;">';?>
    <div class="media-body">

      
        <?php
      print'<h4>'.$data['item_Nom'].'</h4>
      <h8><i>Categorie : '.$data['item_Categorie'].'<br>Type de vente: '.$data['item_TypeVente'].'</i></h8>
       
      <p><small>' .$data['item_TypeVente'].' </small></p>

      
      <h6> 
       
      <br><b>Prix : '.$data['item_Prix'].' euros </b></h6>
      ';
      
      ?>
      <div class="emplacement_boutons_item">

  <input type="button" class="bouton_item" onclick="location.href='./SupprimerItemAdmin.php?id_supprimer= <?php echo $data['item_ID']  ;?>'" value="Supprimer" style="background-color: red; border-color: red; color: white; ">

  <input type="button" class="bouton_item1" onclick="location.href='./EditItem.php?id_supprimer= <?php echo $data['item_ID']  ;?>'" value="Editer" >



      </div>
    </div>     
  </div>
</div> 

<?php

//Vendeur: '.$vendeur['vendeur_Pseudo'].' 

    }
  } 
}
else {
    echo "Database not found";
  }
  }
?> 


<footer class="container-fluid text-center" id='footer'>
  <p><br>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
