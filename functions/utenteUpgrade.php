<?php

function utenteUpgrade($connect,$id){

    $query="update utente set id_gruppo=2 where id=$id";
    $dati=mysqli_query($connect, $query);
    if($dati) return 1;
    else return 0;
}

?>