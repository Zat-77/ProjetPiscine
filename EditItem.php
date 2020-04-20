<!DOCTYPE html>
<html lang="en">
<head>
  <title>ItemRegister</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="EbayECE.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
<?php
$database = "ebayece";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$sql = "SELECT * FROM item WHERE item_ID = 1";
$result = mysqli_query($db_handle, $sql);
$data = mysqli_fetch_assoc($result);
?>
<?php include("Menu.php"); ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Home.html">Home</a></li>
        <li><a href="ItemRegister.html">Vendre</a></li>
        <li><a href="Home.html">Mes Objets</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="EditSeller.html">Compte</a></li>
        <li><a href="Home.html">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
 

    <div class="col-sm-8 text-left"> 
       <div id="formulaire">
        <h1 align="center">Formulaire Item</h1>
        <form action="EditItem.php" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td>Nom</td>
              <td>
                <?php  print '<input type="text" name="nom" value= "'.$data['item_Nom'].'" >';?>
              </td>
            </tr>  
            <tr>
              <td>Photo/Video Item</td>
              <td>
                <?php  print '<input type="file" name="photo" value= "'.$data['item_Photo'].'" >';?></td>
            </tr>
            <tr>
              <td>Prix</td>
              <td>
                <?php  print '<input type="number" name="prix" value= "'.$data['item_Prix'].'" >';?>

              </td>
            </tr>
            <tr>
              <td>Catégorie</td>
              <td>
                <input type="radio" name="categorie" value="ferraille_ou_tresor" /> Ferraille ou Trésor <br />
                <input type="radio" name="categorie" value="bon_pour_le_musee" /> Bon pour le Musée <br />
                <input type="radio" name="categorie" value="accessoire_vip" /> Accessoire VIP <br />                
              </td>
            </tr>
            <tr>
              <td>Numero</td>
              <td>
                <?php  print '<input type="number" name="numero" value= "'.$data['item_ID'].'" >';?>
              </td>
            </tr>
              <td>Description</td>
              <td><textarea rows="5" cols="20" wrap="physique" name="description" ><?php  print ''.$data['item_Description'].'';?></textarea></td>
            </tr>
            <tr>
              <td>Mode de Vente</td>
              <td>
                <input type="radio" name="mode" value="enchere" /> Enchère <br />
                <input type="radio" name="mode" value="achat_immediat" /> Vente Immédiate <br />
                <input type="radio" name="mode" value="meilleur_offre" /> Negociation <br />
              </td>
            </tr>
            <tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" class="bouton_item" style="background-color: green; border-color: green; color: white;" name="button1" value="Valider"></td>
            </tr>
          </table>
        </form>
      </div>
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
<?php

$description = isset($_POST["description"])? $_POST["description"] : "";
$photo_profil = isset($_POST["photo"])? $_POST["photo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
$numero = isset($_POST["numero"])? $_POST["numero"] : "";
$mode = isset($_POST["mode"])? $_POST["mode"] : "";



if (isset($_POST['button1'])) {

  if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("image/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "image/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{

        echo "Error: " . $_FILES["photo"]["error"];
    }
if ($photo_profil!="") {
 

if ($filename!= $data['item_Photo']) {
 $sql="UPDATE item SET itemr_Photo = '$filename' WHERE item_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);

}
}
if ($categorie!= $data['item_Categorie']) {
  if ($categorie == "ferraille_ou_tresor" && $data['item_Categorie']== "ferraille_ou_tresor") {

   $sql="UPDATE item SET item_Categorie = 'ferraille_ou_tresor' WHERE item_ID =1";
   mysqli_query($db_handle, $sql);
 }
 elseif ($categorie == "bon_pour_le_musee"&& $data['item_Categorie']== "bon_pour_le_musee") {

   $sql="UPDATE item SET item_Categorie = 'bon_pour_le_musee' WHERE item_ID = 1";
   mysqli_query($db_handle, $sql);
 }
 elseif ($categorie == "accessoire_vip"&& $data['item_Categorie']== "accessoire_vip") {

   $sql="UPDATE item SET item_Categorie = 'accessoire_vip' WHERE item_ID = 1";
   mysqli_query($db_handle, $sql);
 }
 
 
}
if ($nom!= $data['item_Nom']) {
 $sql="UPDATE item SET item_Nom = '$nom' WHERE item_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($prix!= $data['item_Prix']) {
 $sql="UPDATE item SET item_Prix = '$prix' WHERE item_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($description!= $data['item_Description']) {
 $sql="UPDATE item SET item_Description = '$description' WHERE item_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($mode!= $data['item_TypeVente']) {
  if ($mode == "enchere" && $data['item_TypeVente']== "enchere") {

   $sql="UPDATE item SET item_TypeVente = 'enchere' WHERE item_ID = 1";
   mysqli_query($db_handle, $sql);
 }
 elseif ($mode == "achat_immediat"&& $data['item_TypeVente']== "achat_immediat") {

   $sql="UPDATE item SET item_TypeVente = 'achat_immediat' WHERE item_ID = 1";
   mysqli_query($db_handle, $sql);
 }
 elseif ($mode == "meilleur_offre"&& $data['item_TypeVente']== "meilleur_offre") {

   $sql="UPDATE item SET item_TypeVente = 'meilleur_offre' WHERE item_ID = 1";
   mysqli_query($db_handle, $sql);
 }
  
 
 
}
 

}






?>

<footer class="container-fluid text-center" id='footer'>
  <p><br>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>
</body>
</html>