<?php

function connection(){

    $connect=mysqli_connect("localhost", "agileadmin", "agileadmin", "eventplanner");
    return $connect;}

function connectionTest(){

    $connectTest=mysqli_connect("127.0.0.1", "root", "password", "eventplannertest");
    return $connectTest;
}

?>
