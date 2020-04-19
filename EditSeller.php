<!DOCTYPE html>
<html lang="en">
<head>
  <title>EditSeller</title>
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

    <div class="col-sm-8 text-left"> 
       <div id="formulaire">
        <h1 align="center">Formulaire Vendeur</h1>
        <form action="FormulaireVendeur.php" method="post">
          <table>
            <tr>
              <td>Pseudo</td>
              <td>
               <?php  ECHO '   <input type="text" name="pseudo"> value= $data['vendeur_Pseudo'] >';?>
              </td>
            </tr>  
            <tr>
              <td>Photo Profil</td>
              <td>
               <?php ECHO '  <input type="file" name="photo_profil" value= $data['vendeur_Profil'] >';?>
              </td>
            </tr>
            <tr>
              <td>Nom</td>
              <td>
                <?php ECHO ' <input type="text" name="nom" value= $data['vendeur_Profil'] >';?>
              </td>
            </tr>
            <tr>
              <td>Mail</td>
              <td>
                  <?php ECHO ' <input type="text" name="mail">';?>
              </td>
            </tr>
              <td>Mot de passe</td>
              <td>
                <?php ECHO ' <input type="password" name="mot_de_passe"> value= $data['vendeur_Profil'] >';?>
              </td>
            </tr>
            <tr>
              <td>Fond Preferé</td>
              <td>
                <input type="radio" value="bleu" name="fond"/> Bleu <br />
                <input type="radio" value="vert" name="fond"/> Vert <br />
                <input type="radio" value="rouge" name="fond" /> Rouge <br />
              </td>
            </tr>
            <tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" value="Valider"></td>
            </tr>
          </table>
        </form>
      </div>
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

<footer class="container-fluid text-center">
  <p>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
