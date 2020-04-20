<?php
$Enchere_Max = isset($_GET["Enchere_Max"])? $_GET["Enchere_Max"] : "";
$button1 = isset($_GET["button1"])? $_GET["button1"] : "";
$database1 = "ebayece";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database1);

$sql="UPDATE enchere SET enchere_PrixMax = '$Enchere_Max' WHERE enchere_ID= '$button1'";
echo "$sql";
$result = mysqli_query($db_handle, $sql);


?>