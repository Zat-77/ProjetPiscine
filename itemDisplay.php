<?php
$sql=$_SESSION['sql'];
$database1 = "ebayece";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database1);
$result = mysqli_query($db_handle, $sql);

//on trouve le livre recherché
			while ($data = mysqli_fetch_assoc($result)) {
				
				
				$image1=$data['item_Photo'];

				if ($data['item_Categorie'] == "1") {

			$categorie1 = "Ferraille ou Trésor";
			
		}
		elseif ($data['item_Categorie'] == "2") {
			$categorie1 = " Bon pour le Musée";
			
		}
		elseif ($data['item_Categorie'] == "3") {
			$categorie1 .= "Accessoire Vip";
			
		}
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
						<div class="media border p-3">
							
							<?php print '<img src="image/'.$image1.'" class="mr-3 mt-3 " style="width:200px;" />';?>
							<!-- <img src="#" class="mr-3 mt-3 " style="width:200px;"> -->
							<div class="media-body">
								<h4><?php echo "Item A: " . $data['item_Nom'] .""; ?></h4><h6><small><i><?php echo "Categorie: " . $categorie1 .""; ?><br><?php echo "Type de vente: " . $data['item_TypeVente'] .""; ?></i></small></h6>

								<p><?php echo "Description: " . $data['item_Description'] .""; ?></p>

								<h5><?php echo "Prix: " . $data['item_Prix'] .""; ?></h5>

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