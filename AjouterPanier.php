<?php
session_start();
$id_Item=$_GET["id_Item"];

$id_User=$_SESSION['id_User'];
echo "Tes: $id_Item";
$sql="SELECT * FROM item WHERE item_ID='$id_Item'";
$database1 = "ebayece";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database1);
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) {
				

				if ($data['item_TypeVente'] == "1") {
					
			$sql = "INSERT INTO `immediat` (`immediat_ID`, `immediat_IDItem`, `immediat_IDAcheteur`) VALUES (NULL, '$id_Item', '$id_User') ";
			$res = mysqli_query($db_handle, $sql);
		}
		elseif ($data['item_TypeVente'] == "2") {
			$sql = "INSERT INTO `negociation` (`nego_ID`, `nego_IDItem`, `nego_IDAcheteur`, `nego_Tentative`, `nego_Offre`, `nego_ContreOffre') VALUES (NULL, '$id_Item', '$id_User', '0', '', '') ";
			$res = mysqli_query($db_handle, $sql);
			
		}
		elseif ($data['item_TypeVente'] == "3") {
			$sql = "INSERT INTO `enchere` (`enchere_ID`, `enchere_IDItem`, `enchere_IDAcheteur`, `enchere_PrixMax`) VALUES (NULL, '$id_Item', '$id_User', '') ";
			$res = mysqli_query($db_handle, $sql);
			
		}
	}

?>