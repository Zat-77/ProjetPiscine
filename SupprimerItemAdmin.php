<?php
$id_Supprimer=$_GET["id_supprimer"];
$database1 = "ebayece";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database1);

$sql="DELETE FROM item WHERE item_id = '$id_Supprimer'";

$result = mysqli_query($db_handle, $sql);
$sql "DELETE FROM negociation WHERE nego_IDItem='$id_Supprimer'"
$result = mysqli_query($db_handle, $sql);
$sql "DELETE FROM enchere  WHERE enchere _IDItem='$id_Supprimer'"
$result = mysqli_query($db_handle, $sql);
$sql "DELETE FROM immediat  WHERE immediat _IDItem='$id_Supprimer'"
$result = mysqli_query($db_handle, $sql);
?>
