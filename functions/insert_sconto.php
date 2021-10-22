<?php
include("./connection.php");
$connect=connection();
$nome=$_POST["nome"];
$percentuale=$_POST["percentuale"];

$query="insert into sconto VALUES (NULL, '$nome','$percentuale')";
            $dati=mysqli_query($connect, $query);
                //or die ("Non riesco ad eseguire la query $dati");

             //echo("error: " . mysqli_error($connect));

          header("location: ../backend/sale.php");

?>