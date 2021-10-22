<?php
include("user_session.php");

function loginTest($connect,$email,$password){



    $query="SELECT u.id, u.nome, cognome, email, password, g.nome as ruolo, g.id as ruoloid FROM `utente` u join gruppo g on (u.`id_gruppo`=g.id) where email='$email' AND password='$password' GROUP BY email";

    $dati=mysqli_query($connect, $query);
    //echo("error: " . mysqli_error($connect));
    $valori=mysqli_fetch_array($dati);

    if($valori){

        return $valori;

    }


    return 0;

}

    function upgrade($connect,$id){

        $query="update utente set id_gruppo=3 where id=$id";
        $dati=mysqli_query($connect, $query)
        or die ("Non riesco ad eseguire la query $dati");
        //echo("error: " . mysqli_error($connect));
        return $dati;
    }
    function login($connect,$email,$password){



            $query="SELECT u.id, u.nome, cognome, email, password, g.nome as ruolo, g.id as ruoloid FROM `utente` u join gruppo g on (u.`id_gruppo`=g.id) where email='$email' AND password='$password'";
            
            $dati=mysqli_query($connect, $query);
       // echo("error: " . mysqli_error($connect));

        $valori=mysqli_fetch_array($dati);

            if($valori){
                controllo_utente();
                $_SESSION["ruolo"]=$valori['ruolo'];
                $_SESSION["email"]=$email;
                $_SESSION["password"]=$password;
                $_SESSION["nome"]=$valori["nome"];
                $_SESSION["cognome"]=$valori["cognome"];
                $_SESSION["id"]=$valori["id"];

                return $valori;}


               else{
                  return 0;
                }



    }




    function sing_in($connect, $nome, $cognome, $email,$password, $telefono, $indirizzo, $username){
        

            
            $query="insert into utente (username, nome, cognome, email, telefono , indirizzo, password, id_gruppo, id_wishlist) VALUES ('$username','$nome','$cognome', '$email', '$telefono', '$indirizzo', '$password','2', NULL);";
            $dati=mysqli_query($connect, $query);
                 $valori=mysqli_fetch_array($dati);

        if($valori){
            controllo_utente();
            $_SESSION["ruolo"]=$valori['ruolo'];
            $_SESSION["email"]=$email;
            $_SESSION["password"]=$password;
            $_SESSION["nome"]=$valori["nome"];
            $_SESSION["cognome"]=$valori["cognome"];
            $_SESSION["id"]=$valori["id"];}




        $query="SELECT id FROM  utente order by id DESC limit 1;";
        $dati=mysqli_query($connect, $query);
        $result=mysqli_fetch_array($dati);
        $idutente=$result["id"];


        $query="insert into wishlist VALUES ('$idutente');";
        $dati=mysqli_query($connect, $query);
       // echo("error: " . mysqli_error($connect));


        $query="UPDATE utente set id_wishlist='$idutente' where id=$idutente;";
        $dati=mysqli_query($connect, $query);
        login($connect,$email,$password);
    //    echo("error: " . mysqli_error($connect));





    }
function wishlist($connect, $idU, $idE){


    $query="insert into evento_wishlist values ('$idE', '$idU')";
    $dati=mysqli_query($connect, $query);
    if($dati){
        return 1;
    }
    return 0;
}
function sign_in($connect, $nome, $cognome, $email,$password)
{


    $query = "insert into utente ( nome, cognome, email, password, id_gruppo, id_wishlist) VALUES ('$nome','$cognome', '$email', '$password','2', NULL);";
    $dati = mysqli_query($connect, $query);
    $valori = mysqli_fetch_array($dati);

    if ($valori) {
        return 1;
    }


    $query = "SELECT id FROM  utente order by id DESC limit 1;";
    $dati = mysqli_query($connect, $query);
    $result = mysqli_fetch_array($dati);
    $idutente = $result["id"];


    $query = "insert into wishlist VALUES ('$idutente');";
    $dati = mysqli_query($connect, $query);
    // echo("error: " . mysqli_error($connect));


    $query = "UPDATE utente set id_wishlist='$idutente' where id=$idutente;";
    $dati = mysqli_query($connect, $query);
    login($connect, $email, $password);
    //    echo("error: " . mysqli_error($connect));
}

    function controllo_utente(){

        session_start();

    }

   //AGILE
     function select_utente($connect){
        $query="SELECT u.id, nome, cognome, u.email from utente u where id_gruppo=2 GROUP by u.id";

        
        $dati=mysqli_query($connect, $query);
        //echo("error: " . mysqli_error($connect));
        return $dati;
    }



    function select_amministratore($connect){
        $query="SELECT * from utente where id_gruppo=1 or id_gruppo=3";
        
        $dati=mysqli_query($connect, $query)
            or die ("Non riesco ad eseguire la query $dati");

        return $dati;
    }

    function select_totale_utenti ($connect){
        $query="SELECT COUNT(*) as totale FROM utente";
        
        $dati=mysqli_query($connect, $query)
            or die ("Non riesco ad eseguire la query $dati");
        $valori=mysqli_fetch_array($dati);
        $count=$valori["totale"];
            return $count;
    }



function select_utente_dettagli($connect, $id){
    $query="SELECT * from utente u where id=$id";


    $dati=mysqli_query($connect, $query);
    //echo("error: " . mysqli_error($connect));
    return $dati;
}

function update_password($connect,$id,$vecchiaPSW,$nuovaPSW){
    $query="SELECT * from utente where id='$id'";
    $dati=mysqli_query($connect, $query)
    or die ("Non riesco ad eseguire la query $dati");

    $valori=mysqli_fetch_array($dati);

    $vecchiaPSWDB=$valori["password"];

    if($vecchiaPSWDB==$vecchiaPSW){
            $query="UPDATE utente set password='$nuovaPSW' where id='$id'";
            $dati=mysqli_query($connect, $query);

            return 1; // tutto ok
    }
    return 2; // passwd account errata
}

function update_info($connect, $id, $nome,$cognome,$username, $telefono, $indirizzo, $foto){
    $query="UPDATE utente set nome='$nome', cognome='$cognome', username='$username', telefono='$telefono', indirizzo='$indirizzo', foto='$foto' where id='$id'";
    $dati=mysqli_query($connect, $query);

    if($dati) return 1;
    return 0;

}

function select_wishlist($connect, $id){
    $query="SELECT e.id, e.nome, e.codice, e.costo, e.data_inizio, e.data_fine FROM utente u join wishlist w on(u.id_wishlist=w.id) join evento_wishlist ew on (ew.id_wishlist=w.id) join evento  e on (e.id=ew.id_evento) where u.id=$id";
    $dati=mysqli_query($connect, $query);
    //echo("error: " . mysqli_error($connect));
    return $dati;
}


    function logout(){
        
        session_destroy();
        header("location: ../index.php");
        
    }



    