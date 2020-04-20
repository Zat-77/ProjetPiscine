<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paiement</title>
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
    <div class="col-sm-8 text-center"> 
      


      <div id="formulaire">
        <h1 align="center">Coordonnées Bancaires</h1>
        <form action="paiement.php" method="post">
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
$mot_de_passe = isset($_POST["mot_de_passe"])? $_POST["mot_de_passe"] : "";
$nom_titulaire = isset($_POST["nom_titulaire"])? $_POST["nom_titulaire"] : "";


$database = "ebayece";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
if ($_POST["button2"]) {
  if ($db_found)
  $verif=0; 
  $sql="SELECT payement_Date FROM payement WHERE payement_ID='$data['payement_ID']'";
    {if ($date_expiration==mysqli_query($db_handle, $sql);) {
      # code...
      $sql="SELECT payement_Numero FROM payement WHERE payement_ID='$data['payement_ID']'";
      if($numero_carte==mysqli_query($db_handle, $sql);)
      {
        $sql="SELECT payement_Code FROM payement WHERE payement_ID='$data['payement_ID']'";
        if (mot_de_passe==mysqli_query($db_handle, $sql);) {
                  $sql="SELECT payement_NomTitulaire FROM payement WHERE payement_ID='$data['payement_ID']'";
          if (nom_titulaire==mysqli_query($db_handle, $sql);) {
            # code...
                  // if prix < compte a placer ici 
                        $verif=1;

          }
          # code...
        }
      }
    }
    if($verif==1)
      {
        ?>
        
      }
    else






?>



<footer class="container-fluid text-center">
  <p>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>












