<?php
include('connection.php');
$connect=connection();
$ide=$_GET['ide'];
$idu=$_GET['idu'];

    $query="delete from evento_wishlist where (id_evento=$ide and id_wishlist=$idu)";
    $dati=mysqli_query($connect, $query);




header("location: ../wishlist.php");
?>