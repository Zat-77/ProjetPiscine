<!DOCTYPE html>
<html lang="en">
<head>
  <title>EditClient</title>
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
$sql = "SELECT * FROM acheteur WHERE acheteur_ID = 5";
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
        <h1 align="center">Formulaire Client</h1>
        <form action="EditClient.php" method="post">
          <table>
            <tr>
              <td>Nom</td>
              <td>
               <?php  print '<input type="text" name="nom" value= "'.$data['acheteur_Nom'].'" >';?>
              </td>
            </tr>
            <tr>
              <td>Prenom</td>
              <td>
                <?php  print '<input type="text" name="prenom" value= "'.$data['acheteur_Prenom'].'" >';?>
              
              </td>
            </tr>
            <tr>
              <td>Ville</td>
              <td>
               <?php  print '<input type="text" name="ville" value= "'.$data['acheteur_Ville'].'" >';?> 
               
              </td>
            </tr>
            <tr>
              <td>Code Postal</td>
              <td>
                <?php  print '<input type="text" name="code_postal" value= "'.$data['acheteur_CodePost'].'" >';?>
                
              </td>
            </tr>
            <tr>
              <td>Pays</td>
              <td>
                <?php  print '<input type="text" name="pays" value= "'.$data['acheteur_Pays'].'" >';?>
               
              </td>
            </tr>
            <tr>
              <td>Telephone</td>
              <td>
                <?php  print '<input type="text" name="telephone" value= "'.$data['acheteur_Tel'].'" >';?>
                
              </td>
            </tr>
            <tr>
              <td>Adresse1</td>
              <td>
                <?php  print '<input type="text" name="adresse1" value= "'.$data['acheteur_Adresse1'].'" >';?>
                  
              </td>
            </tr>
            <tr>
              <td>Adresse2</td>
              <td>
                <?php  print '<input type="text" name="adresse2" value= "'.$data['acheteur_Adresse2'].'" >';?>
                
              </td>
            </tr>
            <tr>
              <td>Mail</td>
              <td>
                <?php  print '<input type="text" name="mail" value= "'.$data['acheteur_Mail'].'" >';?>
               
              </td>
            </tr>
            <tr>
              <td>Mot de passe</td>
              <td>
                <?php  print '<input type="password" name="mot_de_passe" value= "'.$data['acheteur_mdp'].'" >';?>
              
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" class="bouton_item" style="background-color: green; border-color: green; color: white; name="button1" value="Valider"></td>
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

$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$code_postal = isset($_POST["code_postal"])? $_POST["code_postal"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";
$adresse1 = isset($_POST["adresse1"])? $_POST["adresse1"] : "";
$adresse2 = isset($_POST["adresse2"])? $_POST["adresse2"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$mot_de_passe = isset($_POST["mot_de_passe"])? $_POST["mot_de_passe"] : "";




if (isset($_POST['button1'])) {
if ($nom!= $data['acheteur_Nom']) {
 $sql="UPDATE acheteur SET acheteur_Nom = '$nom' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);

}
if ($prenom!= $data['acheteur_Prenom']) {
 $sql="UPDATE acheteur SET acheteur_Prenom = '$prenom' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($ville!= $data['acheteur_Ville']) {
 $sql="UPDATE acheteur SET acheteur_Ville = '$ville' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($code_postal!= $data['acheteur_CodePost']) {
 $sql="UPDATE acheteur SET acheteur_CodePost = '$code_postal' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($pays!= $data['acheteur_Pays']) {
 $sql="UPDATE acheteur SET acheteur_Pays = '$pays' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($telephone!= $data['acheteur_Tel']) {
 $sql="UPDATE acheteur SET acheteur_Tel = '$telephone' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($adresse1!= $data['acheteur_Adresse1']) {
 $sql="UPDATE acheteur SET acheteur_Adresse1 = '$adresse1' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($adresse2!= $data['acheteur_Adresse2']) {
 $sql="UPDATE acheteur SET acheteur_Adresse2 = '$adresse2' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($mail!= $data['acheteur_Mail']) {
 $sql="UPDATE acheteur SET acheteur_Mail = '$mail' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
if ($mot_de_passe!= $data['acheteur_mdp']) {
 $sql="UPDATE acheteur SET acheteur_mdp = '$mot_de_passe' WHERE acheteur_ID = 5";
 echo "string";
 mysqli_query($db_handle, $sql);
 
}
}






?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <div id="formulaire">
        <h1 align="center">Formulaire Client</h1>
        <form action="EditClient.php" method="post">
          <table>
            <tr>
              <td>Nom</td>
              <td>
               <?php  print '<input type="text" name="nom" value= "'.$data['acheteur_Nom'].'" >';?>
              </td>
            </tr>
            <tr>
              <td>Prenom</td>
              <td>
                <?php  print '<input type="text" name="prenom" value= "'.$data['acheteur_Prenom'].'" >';?>
              
              </td>
            </tr>
            <tr>
              <td>Ville</td>
              <td>
               <?php  print '<input type="text" name="ville" value= "'.$data['acheteur_Ville'].'" >';?> 
               
              </td>
            </tr>
            <tr>
              <td>Code Postal</td>
              <td>
                <?php  print '<input type="text" name="code_postal" value= "'.$data['acheteur_CodePost'].'" >';?>
                
              </td>
            </tr>
            <tr>
              <td>Pays</td>
              <td>
                <?php  print '<input type="text" name="pays" value= "'.$data['acheteur_Pays'].'" >';?>
               
              </td>
            </tr>
            <tr>
              <td>Telephone</td>
              <td>
                <?php  print '<input type="text" name="telephone" value= "'.$data['acheteur_Tel'].'" >';?>
                
              </td>
            </tr>
            <tr>
              <td>Adresse1</td>
              <td>
                <?php  print '<input type="text" name="adresse1" value= "'.$data['acheteur_Adresse1'].'" >';?>
                  
              </td>
            </tr>
            <tr>
              <td>Adresse2</td>
              <td>
                <?php  print '<input type="text" name="adresse2" value= "'.$data['acheteur_Adresse2'].'" >';?>
                
              </td>
            </tr>
            <tr>
              <td>Mail</td>
              <td>
                <?php  print '<input type="text" name="mail" value= "'.$data['acheteur_Mail'].'" >';?>
               
              </td>
            </tr>
            <tr>
              <td>Mot de passe</td>
              <td>
                <?php  print '<input type="password" name="mot_de_passe" value= "'.$data['acheteur_mdp'].'" >';?>
              
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" name="button1" value="Valider"></td>
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
<footer class="container-fluid text-center" id='footer'>
  <p><br>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
