<!DOCTYPE html>
<html lang="en">
<head>
  <title>EditSeller</title>
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
$sql = "SELECT * FROM vendeur WHERE vendeur_ID = 1";
$result = mysqli_query($db_handle, $sql);
$data = mysqli_fetch_assoc($result);
?>
 <?php include("Menu.php"); ?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>

    <div class="col-sm-8 text-left"> 
       <div id="formulaire">
        <h1 align="center">Formulaire Vendeur</h1>
        <form action="EditSeller.php" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td>Pseudo</td>
              <td>
                <?php  print '<input type="text" name="pseudo" value= "'.$data['vendeur_Pseudo'].'" >';?>
               
              </td>
            </tr>  
            <tr>
              <td>Photo Profil</td>
              <td>
                <?php  print '<input type="file" name="photo" value= "'.$data['vendeur_Photo'].'" >';?>
               
              </td>
            </tr>
            <tr>
              <td>Nom</td>
              <td>
                <?php  print '<input type="text" name="nom" value= "'.$data['vendeur_Nom'].'" >';?>
                
              </td>
            </tr>
            <tr>
              <td>Mail</td>
              <td>
                <?php  print '<input type="text" name="mail" value= "'.$data['vendeur_Mail'].'" >';?>
                  
              </td>
            </tr>
              <td>Mot de passe</td>
              <td>
                <?php  print '<input type="password" name="mot_de_passe" value= "'.$data['vendeur_Mdp'].'" >';?>
                
              </td>
            </tr>
            <tr>
              <td>Fond Preferé</td>
              <td>
                <input type="radio" value="bleu" name="fond"/> Bleu <br />
                <input type="radio" value="vert" name="fond"/> Vert <br />
                <input type="radio" value="rouge" name="fond" /> Rouge <br />
              </td>
            </tr>
            <tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" name="button1" value="Valider"></td>
            </tr>
          </table>
        </form>
      </div>
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

$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$photo_profil = isset($_POST["photo"])? $_POST["photo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$mot_de_passe = isset($_POST["mot_de_passe"])? $_POST["mot_de_passe"] : "";
$fond = isset($_POST["fond"])? $_POST["fond"] : "";



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

if ($filename!= $data['vendeur_Photo']) {
 $sql="UPDATE vendeur SET vendeur_Photo = '$filename' WHERE vendeur_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);

}
}
if ($pseudo!= $data['vendeur_Pseudo']) {
 $sql="UPDATE vendeur SET vendeur_Pseudo = '$pseudo' WHERE vendeur_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($nom!= $data['vendeur_Nom']) {
 $sql="UPDATE vendeur SET vendeur_Nom = '$nom' WHERE vendeur_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($fond!= $data['vendeur_Fond']) {
 $sql="UPDATE vendeur SET vendeur_Fond = '$fond' WHERE vendeur_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($mail!= $data['vendeur_Mail']) {
 $sql="UPDATE vendeur SET vendeur_Mail = '$mail' WHERE vendeur_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($mot_de_passe!= $data['vendeur_Mdp']) {
 $sql="UPDATE vendeur SET vendeur_Mdp = '$mot_de_passe' WHERE vendeur_ID = 1";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
}






?>
<footer class="container-fluid text-center" id='footer'>
  <p>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
