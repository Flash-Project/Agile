<?php
session_start();

$id=$_SESSION["id"];
include("./functions/connection.php");
$connect=connection();
$sql = mysqli_query($connect, "UPDATE utente SET status = 'Offlline Now' WHERE id='$id'") or die();
header("location: ./login.php");
session_destroy();
?>