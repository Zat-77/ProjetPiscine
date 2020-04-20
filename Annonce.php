<!DOCTYPE html>
<html lang="en">
<head>
  <title>Annonce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="EbayECE.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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


<--produit & adminproduct & panier achat immediat-->

  <div class="container mt-3">
    <div class="media border p-0">
      <img src="#" class="mr-3 mt-0" style="width:220px;">
      <div class="media-body">

        <h4>Item A</h4>
        <h8><i>Categorie<br>Type de vente</i></h8>
        
        <p><small>Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description </small></p>

        
        <h6>Vendeur: xxxxxxx <br><b>Price: xxeuros</b></h6>

        <div class="emplacement_boutons_item">

          <input type="button" class="bouton_item" onclick="#" value="Edit" >
          <input type="button" class="bouton_item" onclick="#" value="Supprimer" style="background-color: red; border-color: red; color: white; ">
          <input type="button" class="bouton_item" onclick="#" value="Enchérir" >
          <input type="button" class="bouton_item" onclick="#" value="Négocier" >
          <input type="button" class="bouton_item" onclick="#" value="Ajouter au panier" >

        </div>
      </div>
           
    </div>
  </div>





<--panier enchere-->

  <div class="container mt-3">
    <div class="media border p-0">
      <img src="#" class="mr-3 mt-0" style="width:220px;">
      <div class="media-body">

        <h4>Item A</h4>
        <h8><i>Categorie<br>Type de vente</i></h8>
        
        <p><small>Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description </small></p>

        
        <h6>Vendeur: xxxxxxx <br>Max allowed: xxeuros <br><b>Actual Price: xxeuros </b></h6>

        <div class="emplacement_boutons_item">

          <input type="button" class="bouton_item" onclick="#" value="Edit Max Allowed" >
          

        </div>
      </div>     
    </div>
  </div>








<--panier negociation-->

  <div class="container mt-3">
    <div class="media border p-0">
      <img src="#" class="mr-3 mt-0" style="width:220px;">
      <div class="media-body">

        <h4>Item A</h4>
        <h8><i>Categorie<br>Type de vente</i></h8>
        
        <p><small>Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description </small></p>

        
        <h6>Vendeur: xxxxxxx <br>Statut: en attente<br>Nombre de tentatives: X <br><b>Price: XX euros </b></h6>


        
    

        <div class="emplacement_boutons_item" >
          
          <input type="button" class="bouton_item" onclick="#" value="Refuser" style="background-color: red; border-color: red; color: white;" >
          <input type="button" class="bouton_item" onclick="#" value="Accepter" style="background-color: green; border-color: green; color: white;" >
          <input type="button" class="bouton_item" onclick="openForm()" value="Reproposer" >
        </div>

        <!--div du pop up formulaire--> 
        <div class="form-popup" id="myForm">
          <form action="xxxxxxxxxxxxxxxxx.php" class="form-container">
            
          
            <input type="number" placeholder="Proposition" name="proposition" style="width: 115px;" required >

            <button class="bouton_item" type="submit" style="background-color: green; border-color: green; color: white;">Valider</button>
            <button class="bouton_item" type="button" onclick="closeForm()" style="background-color: red; border-color: red; color: white;">Annuler</button>

          </form>
        </div>
          

        
      </div>     
    </div>
  </div> 






<--mes objets-->

  <div class="container mt-3">
    <div class="media border p-0">
      <img src="#" class="mr-3 mt-0" style="width:220px;">
      <div class="media-body">

        <h4>Item A</h4>
        <h8><i>Categorie<br>Type de vente</i></h8>
        
        <p><small>Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description </small></p>

        
        <h6>Vendeur: xxxxxxx <br><b>Price: xxeuros</b></h6>

        <div class="emplacement_boutons_item">

          <input type="button" class="bouton_item" onclick="#" value="Edit" >
          <input type="button" class="bouton_item" onclick="#" value="Supprimer" style="background-color: red; border-color: red; color: white; ">
          

        </div>
      </div>     
    </div>
  </div>







<--adminadmin-->

  <div class="container mt-3">
    <div class="media border p-0">
      <img src="#" class="mr-3 mt-0" style="width:220px;">
      <div class="media-body">

        <h4>Pseudo Vendeur</h4>
        <h8>Nombre Item en Vente: X <br>E-Mail: xxxxxxxxxxxxxxxx@xxxxx <br>Nom: xxxxxxx</h8>
                
        <h6>Vendeur: xxxxxxx <br><b>Price: xxeuros</b></h6>

        <div class="emplacement_boutons_item">

          <input type="button" class="bouton_item" onclick="#" value="Supprimer" style="background-color: red; border-color: red; color: white; ">
          
        </div>
      </div>  
    </div>
  </div>




  <--vendeur-->

  <div class="container mt-3">
    <div class="media border p-0">
      <img src="table.jpg" class="mr-3 mt-0 image_vendeur">
      <div class="media-body" style="text-align:  center;">

        <h1>Pseudo Vendeur </h1><br><br>
        <h5>Nombre Item en Vente: X  </h5>    

                  
        </div>
      </div>  
    </div>
  














 

</body>
</html>