<?php

function eventDelete($connection,$id){

    $query="delete from evento  where id=$id";
    $dati=mysqli_query($connection, $query);

    if($dati) return 1;
    return 0;
}

?>