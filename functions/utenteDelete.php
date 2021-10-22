<?php

function utenteDelete($connect,$id){

    $query="delete from utente  where id=$id";
    $dati=mysqli_query($connect, $query);
    if($dati) return 1;
    else return 0;
}

?>
