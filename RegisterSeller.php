<!DOCTYPE html>
<html lang="en">
<head>
  <title>RegisterSeller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="EbayECE.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

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
        <li><a href="Produit.html">Products</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="Register.html"><span class="glyphicon glyphicon-Register"></span> Register</a></li>
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
        <h1 align="center">Formulaire Vendeur</h1>
        <form action="RegisterSeller.php" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td>Pseudo</td>
              <td><input type="text" name="pseudo"></td>
            </tr>  
            <tr>
              <td>Photo Profil</td>
              <td><input type="file" name="photo"></td>
            </tr>
            <tr>
              <td>Nom</td>
              <td><input type="text" name="nom"></td>
            </tr>
            <tr>
              <td>Mail</td>
              <td><input type="text" name="mail"></td>
            </tr>
              <td>Mot de passe</td>
              <td><input type="password" name="mot_de_passe"></td>
            </tr>
            <tr>
              <td>Fond Preferé</td>
              <td>
                <input type="radio" name="fond" value="Ece" /> Ece <br />
                <input type="radio" name="fond" value="Loutre" /> Loutre <br />
                <input type="radio" name="fond" value="GoogGames" /> GoodGames <br />
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

<?php
//recuperer les données venant de la page HTML

$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$mot_de_passe = isset($_POST["mot_de_passe"])? $_POST["mot_de_passe"] : "";
$fond = isset($_POST["fond"])? $_POST["fond"] : "";

//De tutorailrepublic Import de photo
// Check if file was uploaded without errors
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

$tampon=0;

//identifier votre BD
$database = "ebayece";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//si le bouton est cliqué
if ($_POST["button1"]) {
	if ($db_found) {

		$sql = "INSERT INTO vendeur (vendeur_ID, vendeur_Nom, vendeur_Pseudo, vendeur_Mail, vendeur_Mdp, vendeur_Fond, vendeur_Photo) VALUES ('',";
		//Nom
		if ($nom != "") {

			$sql .= " '$nom',";
			$tampon++;
		}
		else
		{
			echo "Nom pas remplit";
		}
		//Pseudo
		if ($pseudo != "") {

			$sql .= " '$pseudo',";
			$tampon++;
		}
		else
		{
			echo "Pseudo pas remplit";
		}
		//Mail
		if ($mail != "") {

			$sql .= " '$mail',";
			$tampon++;
		}
		else
		{
			echo "Mail pas remplit";
		}
		//Mot de passe
		if ($mot_de_passe != "") {

			$sql .= " '$mot_de_passe',";
			$tampon++;
		}
		else
		{
			echo "Mot de Passe pas remplit";
		}
		//Fond
		if ($fond != "") {

			$sql .= " '$fond',";
			$tampon++;
		}
		else
		{
			echo "Fond pas séléctionné";
		}
		//Photo
		if ($filename != "") {

			$sql .= " '$filename') ";
			$tampon++;
		}
		else
		{
			echo "Telephone pas remplit";
		}
		
		//On vérifie que tous les champs sont remplient
		if ($tampon==6) {
			mysqli_query($db_handle, $sql);
			echo "$sql";
		}
		
//tester s'il y a de résultat
// 		if (mysqli_num_rows($result) == 0) {
// //le livre recherché n'existe pas
// 			echo "Item not found";
// 		} else {
// //on trouve le livre recherché
// 			while ($data = mysqli_fetch_assoc($result)) {
// 				echo "ID: " . $data['item_Nom'] . "<br>";
// 				echo "Nom: " . $data['item_Description'] . "<br>";
// 				echo "Auteur: " . $data['item_Prix'] . "<br>";
// 				echo "Année: " . $data['item_Photo'] . "<br>";
// 				echo "Editeur: " . $data['item_TypeVente'] . "<br>";
// 				echo "<br>";
// 				print '<img src="'"image/".$data['item_Photo'].' "alt="texte alternatif" />';
				
// 			}
// 		}
	} else {
		echo "Database not found";
	}
}

//fermer la connexion
mysqli_close($db_handle);

?>