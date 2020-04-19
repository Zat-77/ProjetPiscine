<!DOCTYPE html>
<html lang="en">
<head>
  <title>MesObjets</title>
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
       <form action="AdminProduct.php" method="post">
        <table>

          <tr>
            <td><input type="text" placeholder="Recherche" name="recherche"></td>
          </tr>

          <tr>
            <td align="left" ><br>
              <input  type="checkbox" name="recherche_item" value="ferraille_ou_tresor" /> Ferraille ou trésor <br/>
              <input type="checkbox" name="recherche_item" value="bon_pour_le_musee" /> Bon pour le musée  <br/>
              <input type="checkbox" name="recherche_item" value="accessoire_vip" /> Accessoire VIP <br/>
              <input type="checkbox" name="recherche_item" value="meilleur_offre" /> Meilleur offre <br/>
              <input type="checkbox" name="recherche_item" value="passer_a_la_commande" /> Passer à la commande <br/>
              <input type="checkbox" name="recherche_item" value="achat_immediat" /> Achat immédiat <br/> 
            </td>
          </tr>
          <tr>
            <td><br><input type="submit" class="bouton_volet_recherche" name="rechercher" value="Rechercher" ></td>
          </tr>
          

        </table>
      </form>
    </div>


    <div class="col-sm-8 text-center"> 
     

     
      
      



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
