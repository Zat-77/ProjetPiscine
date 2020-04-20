<?php
 $proposition = isset($_GET["proposition"])? $_GET["proposition"] : "";
 $id_Supprimer = isset($_GET["button1"])? $_GET["button1"] : "";
$database1 = "ebayece";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database1);

$sql1="SELECT * FROM negociation WHERE nego_ID='$id_Supprimer'";

$result = mysqli_query($db_handle, $sql1);
$data = mysqli_fetch_assoc($result);
/*$result= $result +1;*/
$test=$data['nego_Tentative'];
$test++;
$sql="UPDATE negociation SET nego_Offre= '$proposition', nego_Tentative='$test' WHERE nego_ID='$id_Supprimer'";
$result = mysqli_query($db_handle, $sql);

$test=$data['nego_Tentative'];
if ($test==6) {
	$sql="DELETE FROM negociation WHERE nego_ID='$id_Supprimer'";
	$result = mysqli_query($db_handle, $sql);
}
?>
