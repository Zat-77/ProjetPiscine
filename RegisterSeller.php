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
		}
			?>
<script >
			location.href = "./EditSeller.php" ;
</script>		
		<?php
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