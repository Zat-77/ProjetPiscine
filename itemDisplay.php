	<?php
$sql=$_SESSION['sql'];
$id_User=$_SESSION['id_User'];
$_SESSION['id_User']="5";
$database1 = "ebayece";
$user_session=1;
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database1);
$result = mysqli_query($db_handle, $sql);

//on trouve le livre recherché
			while ($data = mysqli_fetch_assoc($result)) {
				
				
				$image1=$data['item_Photo'];

				if ($data['item_Categorie'] == "ferraille_ou_tresor") {

			$categorie1 = "Ferraille ou Trésor";
			
		}
		elseif ($data['item_Categorie'] == "bon_pour_le_musee") {
			$categorie1 = " Bon pour le Musée";
			
		}
		elseif ($data['item_Categorie'] == "accessoire_vip") {
			$categorie1 .= "Accessoire Vip";
			
		}
		$tampon=$data['item_IDVendeur'];
		$sqlVendeur="SELECT * FROM vendeur WHERE vendeur_ID = '$tampon'";
		$res = mysqli_query($db_handle, $sqlVendeur);
		$IDVendeur=mysqli_fetch_assoc($res);
		$pseudo=$IDVendeur['vendeur_Pseudo'];

				?>
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<title>Annonce</title>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
				</head>
				<body>

					





					<div class="container mt-3">
						<div class="media border p-0">
							<?php print '<img src="image/'.$image1.'" class="mr-3 mt-0 " style="width:220px;" />';?>
							<div class="media-body">

								<h4><?php echo "Item: " . $data['item_Nom'] .""; ?></h4>
								<h8><i><?php echo "Categorie: " . $categorie1 .""; ?><br><?php echo "Type de vente: " . $data['item_TypeVente'] .""; ?></i></h8>

								<p><small><?php echo "Description: " . $data['item_Description'] .""; ?> </small></p>


								<h6 > <a href="./MesObjetsAcheteur.php"><?php echo "Vendeur: " . $pseudo .""; ?> </a> <br  >Max allowed: xxeuros <br><b><?php echo "Prix: " . $data['item_Prix'] .""; ?></b></h6>

								<div class="emplacement_boutons_item">

									<input type="button" class="bouton_item" onclick="location.href='./AjouterPanier.php?id_Item= <?php echo $data['item_ID']  ;?>'" value="Ajouter au Panier" >


								</div>
							</div>     
						</div>
					</div>
				</body>
				</html>
				<?php		
			}
		
	 /*else {
		echo "Database not found";
	}*/
	mysqli_close($db_handle);
?>	