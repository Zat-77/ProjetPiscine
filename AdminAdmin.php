<!DOCTYPE html>
<html lang="en">
<head>
  <title>AdminAdmin</title>
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
            <td><input type="text" placeholder="Recherche" name="rechercher"></td>
          </tr>

          <tr>
            <td><br><input type="submit" class="bouton_volet_recherche" name="rechercher" value="Rechercher"></td>
          </tr>

          <tr>
            <td><br><input class="bouton_volet_recherche" type="submit" name="ajouter" value="Ajouter" style="background-color: green; color: white"></td>
          </tr>
          

        </table>
      </form>
    </div>


    <div class="col-sm-8 text-center">


      <div class="container mt-3">
        <div class="media border p-0">
          <img src="#" class="mr-3 mt-0" style="width:220px;">
          <div class="media-body">

            <h4>Item A</h4>
            <h6><i>Categorie<br>Type de vente</i></h6>
            
            <p><small>Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description </small></p>

            
            <h5>Prix</h5>

            <div class="emplacement_boutons_item">

              <input type="button" class="bouton_item" onclick="#" value="Edit" style="background-color: white">
              <input type="button" class="bouton_item" onclick="#" value="Supprimer" style="background-color: red; color: white; ">

            </div>
          </div>
           
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
