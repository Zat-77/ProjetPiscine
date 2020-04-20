<?php
$id_Supprimer=$_GET["id_supprimer"];
$database1 = "ebayece";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database1);

$sql="DELETE FROM immediat WHERE immediat_IDItem = '$id_Supprimer'";
echo "$sql";
$result = mysqli_query($db_handle, $sql);


?>
