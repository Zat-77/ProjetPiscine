
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PanierNegociation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="EbayECE.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
      function openForm() {
      	document.getElementById("myForm").style.display = "block";
		}

      function closeForm() {
      	document.getElementById("myForm").style.display = "none";
      	}
	</script>


</head>


<body>

 <?php 
session_start();
$_SESSION['TypeUser']="acheteur";
 include("Menu.php"); ?>
 




 <div class="container-fluid text-center">    
	<div class="row content">
		<div class="col-sm-2 sidenav">
			<p><a href="PanierAchatImmediat.php">Achat Immédiat</a></p>
			<p><a href="PanierNegociation.php">Négociation</a></p>
			<p><a href="PanierEnchere.php">Enchère</a></p>
		</div>
		<div class="col-sm-8 text-center"> 
		 <?php
		 
		 $database1 = "ebayece";
		 //connectez-vous dans votre BDD
		 //Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
			$db_handle = mysqli_connect('localhost', 'root', '');
			$db_found = mysqli_select_db($db_handle, $database1);
			$sql="SELECT * FROM negociation WHERE nego_IDAcheteur = 5";
			$result = mysqli_query($db_handle, $sql);

			//on trouve le livre recherché
			while ($data = mysqli_fetch_assoc($result)) {
			
			

$tampon=$data['nego_IDItem'];
$itemID="SELECT * FROM item WHERE item_ID=( '$tampon')";


$resultat = mysqli_query($db_handle, $itemID);
$item = mysqli_fetch_assoc($resultat);
$tampon2=$item['item_Nom'];
echo "$tampon2";

$tampon1=$item['item_IDVendeur'];
$vendeurID="SELECT * FROM vendeur WHERE vendeur_ID=( '$tampon1')";
$resultat_Vendeur = mysqli_query($db_handle, $vendeurID);
$vendeur = mysqli_fetch_assoc($resultat_Vendeur);

?>
<div class="container mt-3">
	<div class="media border p-0">
		<?php	print'	<img src="image/'.$item['item_Photo'].'" class="mr-3 mt-0" style="width:220px;">';?>
		<div class="media-body">

			
			  <?php
			print'<h4>'.$item['item_Nom'].'</h4>
			<h8><i>Categorie : '.$item['item_Categorie'].'<br>Type de vente: '.$item['item_TypeVente'].'</i></h8>
			 
			<p><small>' .$item['item_TypeVente'].' </small></p>

			
			<h6> Vendeur: '.$vendeur['vendeur_Pseudo'].'  <br>Statut: '.$item['item_Statut'].'<br>nombre de tentatives: '.$data['nego_Tentative'].' <br><b>Prix Proposé: '.$data['nego_Offre'].' euros </b></h6>
			';
			
			?>
        <div class="emplacement_boutons_item" >
          
          <input type="button" class="bouton_item" onclick="location.href='./SupprimerNegociation.php?id_supprimer= <?php echo $data['nego_ID']  ;?>'" value="Refuser" style="background-color: red; border-color: red; color: white;" >
          <input type="button" class="bouton_item" onclick="#" value="Accepter" style="background-color: green; border-color: green; color: white;" >
          <input type="button" class="bouton_item" onclick="openForm()" value="Reproposer" >
      </div>
        

        <!--div du pop up formulaire--> 
        <div class="form-popup" id="myForm">
          <form action="updateoffre.php" class="form-container">
            
          
            <input type="number" placeholder="Proposition"  name="proposition" style="width: 115px;" required >
       			
            
            <button class="bouton_item" type="submit" onclick="#" value= "<?php echo $data['nego_ID']  ;?>" name="button1" style="background-color: green; border-color: green; color: white;">Valider</button>
            <?php

            // j'ai créer update offre pour le faire las bas mais je sais pas comment passé 2 variable au lieu d'une par l'url 
            
            	//$tentative= SELECT nego_Tentative FROM negociation WHERE nego_ID='$data['nego_ID']'
            	//
            	//UPDATE negociation SET nego_Offre= '$proposition', nego_Tentative='$tentative' WHERE nego_ID='$data['nego_ID']'
            //
            ?>
            <button class="bouton_item" type="button" onclick="closeForm()" style="background-color: red; border-color: red; color: white;">Annuler</button>

          </form>
        </div>

		</div>     
	</div>
</div> 

<?php   
}

mysqli_close($db_handle);
?>  
</div>

</div>
</div>

<footer class="container-fluid text-center" id='footer'>
	<p><br>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
