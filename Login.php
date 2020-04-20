<?php

session_start();
$_SESSION['TypeUser']="nonlog";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
        <h1 align="center">Login</h1>
        <form action="Login.php" method="post">
          <table>
            <tr>
              <td align="center">Mail</td>
              <td><input type="text" name="mail"><br></td>
            </tr>
            <tr>
              <td>Mot de passe</td>
              <td><input type="password" name="mot_de_passe"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><br><input type="submit" name="button1"value="Valider"></td>
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

<footer class="container-fluid text-center" id='footer'>
  <p><br>Copyright &copy; 2020  eBayECE Inc. Tous droits réservés.</p>
</footer>

</body>
</html>
<?php 
$mot_de_passe = isset($_POST["mot_de_passe"])? $_POST["mot_de_passe"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$tampon=0;
$database = "ebayece";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
if (isset($_POST['button1'])) {
	if ($db_found) {
		$sql = "SELECT * FROM acheteur";
		if ($mail != "") {
			$sql .= " WHERE acheteur_Mail LIKE '%$mail%'";
			if ($mot_de_passe != "") {
				$sql .= " AND acheteur_mdp LIKE '%$mot_de_passe%'";
				$result = mysqli_query($db_handle, $sql);

			}
		}
		if ($mail != "" && mysqli_num_rows($result) == 0) {
			$sql="SELECT * FROM vendeur";
			
			$sql .= " WHERE vendeur_Mail LIKE '%$mail%'";
			if ($mot_de_passe != "") {
				$sql .= " AND vendeur_Mdp LIKE '%$mot_de_passe%'";
				$tampon = 1;

			}
		}
		$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
		if (mysqli_num_rows($result) == 0) {
			echo "User not found";
		} else {
			while ($data = mysqli_fetch_assoc($result)) {
				if ($tampon== 0) {
					$_SESSION['TypeUser']="acheteur";
				}
				elseif ($tampon== 1) {
					$_SESSION['TypeUser']="vendeur";
				}
			}
			$test=$_SESSION['TypeUser'];
			echo "$test";
		}
	} else {
		echo "Database not found";
	}
}

?>