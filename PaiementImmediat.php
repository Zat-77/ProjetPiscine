<!DOCTYPE html>
<html lang="en">
<head>
  <title>PaiementImmediat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="EbayECE.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

<?php include("Menu.php"); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-center"> 
      


      <div id="formulaire">
        <h1 align="center">Coordonnées Bancaires</h1>
        <form action="PaiementImmediat.php" method="post">
          <table>
            <tr>
              <td>Type</td>
              <td align="left">
                <input type="radio" name="type_paiement" value="visa" /> Visa <br />
                <input type="radio" name="type_paiement" value="mastercard" /> Mastercard <br />
                <input type="radio" name="type_paiement" value="american_express" /> American Express <br />
                <input type="radio" name="type_paiement" value="paypal" /> Paypal <br />
              </td>
            </tr>
            <tr>
              <td>Date d'expiration</td>
              <td><input type="Date" name="date_expiration"></td>
            </tr>

            <tr>
              <td>Cryptogramme &nbsp</td>
              <td><input type="number" name="cryptogramme"></td>
            </tr>
            <tr>
              <td>Numéro de carte &nbsp</td>
              <td><input type="number" name="numero_carte"></td>
            </tr>
            <tr>
              <td>Nom titulaire &nbsp</td>
              <td><input type="text" name="nom_titulaire"></td>
            </tr>
            <tr>
              <td>CGU &nbsp</td>
              <td align="right"><input type="checkbox" name="cgu" value="cgu" /> J'accepte les CGU <br/>
            </tr>            
            <tr>
              <td colspan="2" align="right"><br><input type="submit" name="button2" value="Valider"></td>
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
$date_expiration = isset($_POST["date_expiration"])? $_POST["date_expiration"] : "";
$cryptogramme = isset($_POST["cryptogramme"])? $_POST["cryptogramme"] : "";
$numero_carte = isset($_POST["numero_carte"])? $_POST["numero_carte"] : "";
$nom_titulaire = isset($_POST["nom_titulaire"])? $_POST["nom_titulaire"] : "";
$type_paiement = isset($_POST["type_paiement"])? $_POST["type_paiement"] : "";



$database = "ebayece";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
echo "MAde it";
if (isset($_POST["button2"])) {
  if ($db_found){
  $verif=0; 
$id_session= 5;
  $sql="SELECT * FROM payement";
  
  if ($date_expiration != "") {
//on cherche le livre avec les paramètres titre et auteur
    $sql .= " WHERE payement_Date = '$date_expiration'";
    if ($cryptogramme != "") {
      $sql .= " AND payement_Code = '$cryptogramme'";
      if ($numero_carte != "") {
//on cherche le livre avec les paramètres titre et auteur
        $sql .= " AND payement_Numero = '$numero_carte'";
        if ($nom_titulaire != "") {
          $sql .= " AND payement_NomTitulaire = '$nom_titulaire'";
          if ($type_paiement != "") {
//on cherche le livre avec les paramètres titre et auteur
            $sql .= " AND payement_Type = '$type_paiement'";
            $sql .= "AND payement_Provision > (SELECT SUM(item_Prix) FROM item WHERE item_ID IN (SELECT immediat_IDItem FROM immediat WHERE immediat_IDAcheteur=$id_session))";
            $verif=1;
            echo "$sql";
          }
        }
      }
    }
  }

    if($verif==1)
      {
        $result = mysqli_query($db_handle, $sql);

      }
      if (mysqli_num_rows($result) != 0) {
//le livre est déjà dans la BDD
        $sql="SELECT * FROM immediat WHERE immediat_IDAcheteur=$id_session ";
        $res = mysqli_query($db_handle, $sql);
        $rest = mysqli_fetch_assoc($res);
        $test = $rest['immediat_IDItem'];
        echo "Brrrrt :$test";
        //$IDItem = $item_Id;
       $sql="DELETE FROM item WHERE item_id = '$test'";

$resultat = mysqli_query($db_handle, $sql);
$sql="DELETE FROM negociation WHERE nego_IDItem='$test'";
$resultat = mysqli_query($db_handle, $sql);
$sql="DELETE FROM enchere  WHERE enchere_IDItem='$test'";
$resultat = mysqli_query($db_handle, $sql);
$sql="DELETE FROM immediat  WHERE immediat_IDItem='$test'";
$resultat = mysqli_query($db_handle, $sql);

echo "Votre carte existe! Et a un fond";
header("Location: PanierAchatImmediat.php");
}
}
}
mysqli_close($db_handle);






?>



<footer class="container-fluid text-center" id='footer'>
  <p>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>