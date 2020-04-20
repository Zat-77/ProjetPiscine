

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="EbayECE.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">


    
    <?php
    	$user=$_SESSION['TypeUser'];
		if($user=="nonlog")
		 {
			 echo " 
          <ul class='nav navbar-dark navbar-right'>
           <li><a href= 'Login.php'><span class='glyphicon glyphicon-log-in'></span>Log in</a></li>
           <li><a href= 'Register.php'>Register</a></li>
          </ul>";
         
         }
         if($user=="admin")
         {
          //<li><a href='Home.php'>Home</a></li>
        	 echo " <ul class='nav navbar-dark'>
             	  	
            		 <li><a href='AdminProduct.php'>Products</a></li>
                             <li><a href='ItemRegister.php'>Vendre</a></li>
             <li><a href='MesObjets.php'>MesObjets</a></li>
                 <li><a href='Negociation.php'>Negociation</a></li>
              </ul>
          	<ul class='nav navbar-dark navbar-right'>
           		<li><a href='AdminAdmin'>Admin</a></li>
           		<li><a href='EditSeller.php'>Compte</a></li>
           		<li><a href='Login.php'>Logout</a></li>
          </ul>";


         }
//<li><a href='Home.php'>Home</a></li>
         if($user=="vendeur")
         {
         	         		   	 echo " <ul class='nav navbar-dark'>
             
             <li><a href='ItemRegister.php'>Vendre</a></li>
             <li><a href='MesObjets.php'>MesObjets</a></li>
             <li><a href='Negociation.php'>Negociation</a></li>
              </ul>
           <ul class='nav navbar-dark navbar-right'>
           <li><a href='EditSeller.php'><span class='glyphicon glyphicon-user'></span>Compte</a></li>
           <li><a href= 'Login.php'><span class='glyphicon glyphicon-log-out'></span>Log Out</a></li>
           </ul>";
         }

         if($user=="acheteur")
         	{
         		   	 echo " <ul class='nav navbar-nav'>
   
             <li><a href='Produit.php'>Products</a></li>
              </ul>

          <ul class='nav navbar-nav '>
           <li><a href='PanierAchatImmediat.php'><span class='glyphicon glyphicon-shopping-cart'></span>Panier</a></li>
           <li><a href='EditClient.php'><span class='glyphicon glyphicon-user'></span>Compte</a></li>
           <li><a href= 'Login.php'><span class='glyphicon glyphicon-log-out'></span>Log Out</a></li>
          </ul>";
         	}

      ?>

  </div>
</nav>
</html>
