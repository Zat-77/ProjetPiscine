<!DOCTYPE html>
<html lang="en">
<head>
  <title>EditClient</title>
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
        <h1 align="center">Formulaire Client</h1>
        <form action="FormulaireClient.php" method="post">
          <table>
            <tr>
              <td>Nom</td>
              <td>
               <?php  ECHO ' <input type="text" name="nom" value= $data['acheteur_Nom'] >';?>
              </td>
            </tr>
            <tr>
              <td>Prenom</td>
              <td>
              <?php  ECHO '<input type="text" name="prenom" value= $data['acheteur_Prenom'] >';?>
              </td>
            </tr>
            <tr>
              <td>Ville</td>
              <td>
               <?php  ECHO ' <input type="text" name="ville"  value=$data['acheteur_Ville']>';?>
              </td>
            </tr>
            <tr>
              <td>Code Postal</td>
              <td>
                <?php ECHO ' <input type="number" name="code_postal" value=$data['acheteur_CodePost']>';?>
              </td>
            </tr>
            <tr>
              <td>Pays</td>
              <td>
               <?php ECHO '  <input type="text" name="pays" value=$data['acheteur_Pays']>';?>
              </td>
            </tr>
            <tr>
              <td>Telephone</td>
              <td>
                <?php ECHO ' <input type="number" name="telephone" value=$data['acheteur_Telephone']>';?>
              </td>
            </tr>
            <tr>
              <td>Adresse1</td>
              <td>
                  <?php ECHO '<input type="text" name="adresse1" value=$data['acheteur_Adresse1']>';?>
              </td>
            </tr>
            <tr>
              <td>Adresse2</td>
              <td>
                <?php ECHO ' <input type="text" name="adresse2" value=$data['acheteur_Adresse2']>';?>
              </td>
            </tr>
            <tr>
              <td>Mail</td>
              <td>
               <?php ECHO ' <input type="text" name="mail" value=$data['acheteur_Mail']>';?>
              </td>
            </tr>
            <tr>
              <td>Mot de passe</td>
              <td>
               <?php ECHO '   <input type="password" name="mot_de_passe"> value=$data['acheteur_Mdp']>';?>
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" value="Valider"></td>
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

<footer class="container-fluid text-center">
  <p>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
