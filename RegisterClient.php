<?php
//recuperer les données venant de la page HTML

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
		$sql = "INSERT INTO acheteur (acheteur_ID, acheteur_Nom, acheteur_Prenom, acheteur_Ville, acheteur_CodePost, acheteur_Pays, acheteur_Tel,acheteur_Adresse1, acheteur_Adresse2,acheteur_Mail, acheteur_mdp) VALUES ('',";
		//Nom
		if ($nom != "") {

			$sql .= " '$nom',";
			$tampon++;
		}
		else
		{
			echo "Nom pas remplit";
		}
		//Prenom
		if ($prenom != "") {

			$sql .= " '$prenom',";
			$tampon++;
		}
		else
		{
			echo "Prenom pas remplit";
		}
		//Ville
		if ($ville != "") {

			$sql .= " '$ville',";
			$tampon++;
		}
		else
		{
			echo "Ville pas remplit";
		}
		//Code Postal
		if ($code_postal != "") {

			$sql .= " '$code_postal',";
			$tampon++;
		}
		else
		{
			echo "Code Postal pas remplit";
		}
		//Pays
		if ($pays != "") {

			$sql .= " '$pays',";
			$tampon++;
		}
		else
		{
			echo "Pays pas remplit";
		}
		//Telephone
		if ($telephone != "") {

			$sql .= " '$telephone',";
			$tampon++;
		}
		else
		{
			echo "Telephone pas remplit";
		}
		//Adresse1
		if ($adresse1 != "") {

			$sql .= " '$adresse1',";
			$tampon++;
		}
		else
		{
			echo "Adresse1 pas remplit";
		}
		//Adresse2
		if ($adresse2 != "") {

			$sql .= " '$adresse2',";
			$tampon++;
		}
		else
		{
			echo "Adresse2 pas remplit";
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
		//mot_de_passe
		if ($mot_de_passe != "") {

			$sql .= " '$mot_de_passe')";
			$tampon++;
		}
		else
		{
			echo "Mot de Passe pas remplit";
		}
		//On vérifie que tous les champs sont remplient
		if ($tampon==10) {
			mysqli_query($db_handle, $sql);
			echo "Bienvenue a EbayEce !";
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