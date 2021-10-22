<?php

include('connection.php');
$connect=connection();
$idU=$_GET['idu'];
$idE=$_GET['ide'];


    $query="insert into evento_wishlist values ('$idE', '$idU')";
    $dati=mysqli_query($connect, $query);

    if(!mysqli_error($connect))
        header("location: ../Details.php?id=$idE&agg=1");
    else
        header("location: ../Details.php?id=$idE&agg=0");


?>
    
    
