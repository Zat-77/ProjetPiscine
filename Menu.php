



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
    <?php
    	$user="acheteur";
		if($user=="nonlog")
		 {
			 echo " <ul class='nav navbar-nav'>
             <li><a href='Home.html'>Home</a></li>
             <li><a href='Produit.html'>Products</a></li>
              </ul>
          <ul class='nav navbar-nav navbar-right'>
           <li><a href= 'Login.html'><span class='glyphicon glyphicon-log-in'></span>Log in</a></li>
          </ul>";
         
         }
         if($user=="admin")
         {
        	 echo " <ul class='nav navbar-nav'>
             		<li><a href='Home.html'>Home</a></li>
            		 <li><a href='Produit.html'>Products</a></li>
              </ul>
          	<ul class='nav navbar-nav navbar-right'>
           		<li><a href='PanierAchatImmediat.html'><span class='glyphicon glyphicon-shopping-cart'></span>Panier</a></li>
           		<li><a href='EditSeller.html'>Compte</a></li>
           		<li><a href='Home.html'>Logout</a></li>
          </ul>";


         }

         if($user=="vendeur")
         {
         	         		   	 echo " <ul class='nav navbar-nav'>
             <li><a href='Home.html'>Home</a></li>
             <li><a href='ItemRegister.html'>Vendre</a></li>
             <li><a href='MesObjets.html'>MesObjets</a></li>
              </ul>
          <ul class='nav navbar-nav navbar-right'>
           <li><a href='PanierAchatImmediat.html'><span class='glyphicon glyphicon-shopping-cart'></span>Panier</a></li>
           <li><a href='EditSeller.html'><span class='glyphicon glyphicon-user'></span>Compte</a></li>
           <li><a href= 'Login.html'><span class='glyphicon glyphicon-log-out'></span>Log Out</a></li>
           </ul>";
         }

         if($user=="acheteur")
         	{
         		   	 echo " <ul class='nav navbar-nav'>
             <li><./a href='Home.html'>Home</a></li>
             <li><./a href='Produit.html'>Products</a></li>
              </ul>
          <ul class='nav navbar-nav navbar-right'>
           <li><a href='PanierAchatImmediat.html'><span class='glyphicon glyphicon-shopping-cart'></span>Panier</a></li>
           <li><a href='EditClient.html'><span class='glyphicon glyphicon-user'></span>Compte</a></li>
           <li><a href= 'Login.html'><span class='glyphicon glyphicon-log-out'></span>Log Out</a></li>
          </ul>";
         	}

      ?>
    </div>
  </div>
</nav>

