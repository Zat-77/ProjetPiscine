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
  <style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
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
          <form action="/action_page.php" class="form-container">
            <h1>Login</h1>
          
            <input type="number" placeholder="Proposition  " name="email" required>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>

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

























 

</body>
</html>