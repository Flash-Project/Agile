<?php



        function select_categoria($connect){
            $query="SELECT * FROM categoria order by id";
            $dati=mysqli_query($connect, $query)
                or die ("Non riesco ad eseguire la query $dati");
            return $dati;

        }

function select_sconto($connect){
    $query="SELECT * FROM sconto order by id";

    $dati=mysqli_query($connect, $query)
    or die ("Non riesco ad eseguire la query $dati");
    return $dati;}


    function select_stato($connect){
     $query="SELECT stato FROM evento group by stato order by id ";
        $dati=mysqli_query($connect, $query)
        or die ("Non riesco ad eseguire la query $dati");
        return $dati;

    }

function select_citta($connect){
    $query="SELECT luogo FROM evento group by luogo order by id";
    $dati=mysqli_query($connect, $query)
    or die ("Non riesco ad eseguire la query $dati");
    return $dati;

}
        function select_tipologia($connect){
            $query="SELECT * FROM tipologia order by id";
            $dati=mysqli_query($connect, $query)
                or die ("Non riesco ad eseguire la query $dati");
            return $dati;

        }

        function select_totale_eventi($connect){
        $query="SELECT COUNT(*) as totale FROM evento";

        $dati=mysqli_query($connect, $query)
            or die ("Non riesco ad eseguire la query $dati");
        $valori=mysqli_fetch_array($dati);
        $count=$valori["totale"];
            return $count;
    }

        function select_totale_categorie($connect){
             $query="SELECT COUNT(*) as totale FROM categoria";

            $dati=mysqli_query($connect, $query)
                or die ("Non riesco ad eseguire la query $dati");
            $valori=mysqli_fetch_array($dati);
            $count=$valori["totale"];
            return $count;
}
function select_totale_ticket($connect){
    $query="SELECT COUNT(DISTINCT o.id_utente, o.id_evento, o.data) as totale FROM ordine o";

    $dati=mysqli_query($connect, $query)
    or die ("Non riesco ad eseguire la query $dati");
    $valori=mysqli_fetch_array($dati);
    $count=$valori["totale"];
    return $count;
}
function select_totale_eventi_categorie($connect, $categoria){
    $query="SELECT COUNT(*) as totale FROM categoria c  join evento e on (c.id=e.id_categoria) where c.nome='$categoria'";

    $dati=mysqli_query($connect, $query)
    or die ("Non riesco ad eseguire la query $dati");
    $valori=mysqli_fetch_array($dati);
    $count=$valori["totale"];
    return $count;
}





function select_evento_related($connect, $categoria){

    $query="SELECT id as idcat from categoria where nome='$categoria' ";
    $dati=mysqli_query($connect, $query);
    //echo("error: " . mysqli_error($connect));

    $result=mysqli_fetch_array($dati);
    $idcat=$result["idcat"];

    $query="SELECT e.id, e.nome as evento, e.costo, e.luogo, e.via, e.data_inizio, e.data_fine, i.nome as immagine, sc.percentuale_sconto as sconto from evento e  left join sconto sc on (sc.id=e.id_sconto) join immagine i on (i.id_evento=e.id) where e.id_categoria='$idcat' group by e.id limit 3  ";
    $dati=mysqli_query($connect, $query);
    //echo("error: " . mysqli_error($connect));

    return $dati ;}




    function select_evento($connect, $id){
        $query="SELECT e.id, e.nome as evento, e.codice, e.costo, e.costo_vip, e.via, e.descrizione, e.numero_biglietti_vip as biglietti_vip, e.orario, sc.codice_sconto as sconto, e.luogo, e.data_inizio, e.stato, e.data_fine, e.numero_biglietti as biglietti, t.nome as tipologia, i.nome as immagine, c.nome as categoria, giorno1, giorno2, giorno3,giorno4, giorno5, giorno6, giorno7, giorno8, giorno9, giorno10, giorno11, giorno12 from evento e left join categoria c on (e.id_categoria=c.id) left join immagine i on (i.id_evento=e.id) left join tipologia t on (t.id=e.id_tipologia) left join sconto sc on (e.id_sconto=sc.id) where e.id=$id ";
        $dati=mysqli_query($connect, $query)
                or die ("Non riesco ad eseguire la query $dati");
           $valori=mysqli_fetch_array($dati);
        return $valori;
        }



        function select_evento_backend($connect){
            $query="SELECT e.id, e.nome as evento, e.codice, e.via,  e.numero_biglietti as biglietti, t.nome as tipologia, c.nome as categoria from evento e left join categoria c on (e.id_categoria=c.id) left join tipologia t on (t.id=e.id_tipologia) ";
            $dati=mysqli_query($connect, $query);
                //or die ("Non riesco ad eseguire la query $dati");
            return $dati;}

    function select_evento_home1($connect){
    $query="SELECT e.id, e.nome as evento, e.costo, e.luogo, e.via, e.data_inizio, e.data_fine, i.nome as immagine, sc.percentuale_sconto as sconto  from evento e  join immagine i on (i.id_evento=e.id)  left join sconto sc on(sc.id=e.id_sconto) where i.tipo='principale' and e.id=20 ";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_evento_home2($connect){
    $query="SELECT e.id, e.nome as evento, e.costo, e.luogo, e.via, e.data_inizio, e.data_fine,  i.nome as immagine , sc.percentuale_sconto as sconto   from evento e   left join sconto sc on(sc.id=e.id_sconto) join immagine i on (i.id_evento=e.id) where i.tipo='principale' and e.id=15 ";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_evento_home3($connect){
    $query="SELECT e.id, e.nome as evento, e.costo, e.luogo, e.via, e.data_inizio, e.data_fine,  i.nome as immagine, sc.percentuale_sconto as sconto   from evento e  left join sconto sc on(sc.id=e.id_sconto) join immagine i on (i.id_evento=e.id) where i.tipo='principale' and e.id=16";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_evento_details($connect, $id){
    $query="SELECT e.id, e.nome as evento, e.costo, e.orario, e.costo_vip, e.descrizione, e.luogo, e.via, e.data_inizio, e.data_fine, c.nome as categoria, sc.percentuale_sconto as sconto  from evento e left join sconto sc on(sc.id=e.id_sconto)  join categoria c on(e.id_categoria=c.id) where e.id=$id ";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_immagine_principale($connect, $id){
    $query="SELECT i.nome from evento e join immagine i on(e.id= i.id_evento) where (i.tipo='principale' and e.id=$id)";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_immagini_galleria($connect, $id){
    $query="SELECT i.nome from evento e join immagine i on(e.id= i.id_evento) where (i.tipo LiKE '%galleria%' and e.id=$id)";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}


function select_recensioni($connect){
    $query="SELECT e.codice, r.id, u.nome, u.cognome, r.descrizione, r.rating, u.email, e.nome as evento FROM recensione r join evento e  on (e.id=r.id_evento)  join utente u on(u.id=r.id_utente)";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_recensioni_details($connect, $id){
    $query="SELECT e.codice, r.id, u.nome, u.cognome, r.descrizione, r.rating, u.email, e.nome as evento FROM recensione r join utente u on (u.id=r.id_utente) join evento e on (e.id=r.id_evento) where e.id=$id";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_evento_fronted($connect){


        $query="SELECT MIN(data_inizio) as data_inizio from evento ";
        $dati=mysqli_query($connect, $query);
        $result=mysqli_fetch_array($dati);
        $data_inizio=$result["data_inizio"];

    if((isset($_COOKIE["dataI"])) && (($_COOKIE["dataI"])!="null")){
        $data_inizio=$_COOKIE["dataI"];
        }



    $query="SELECT MAX(data_fine) as data_fine from evento ";
    $dati=mysqli_query($connect, $query);
    $result=mysqli_fetch_array($dati);
    $data_fine=$result["data_fine"];

    if(isset($_COOKIE["dataF"])){
        $data_fine=$_COOKIE["dataF"];
        $query="SELECT e.id, e.nome as evento, e.codice, e.via,  e.numero_biglietti as biglietti, t.nome as tipologia, c.nome as categoria, e.costo, e.descrizione, e.luogo, e.via, e.data_inizio, e.data_fine, e.stato, sc.percentuale_sconto as sconto from evento e left join sconto sc on (sc.id=e.id_sconto) left join categoria c on (e.id_categoria=c.id) left join tipologia t on (t.id=e.id_tipologia) where data_fine<='$data_fine' ";

    }
    else{

    $query="SELECT e.id, e.nome as evento, e.codice, e.via,  e.numero_biglietti as biglietti, t.nome as tipologia, c.nome as categoria, e.costo, e.descrizione, e.luogo, e.via, e.data_inizio, e.data_fine, e.stato, sc.percentuale_sconto as sconto from evento e left join sconto sc on (sc.id=e.id_sconto) left join categoria c on (e.id_categoria=c.id) left join tipologia t on (t.id=e.id_tipologia) where (data_inizio>='$data_inizio' AND data_fine<='$data_fine') "; }

    if(isset($_COOKIE["nome"])){
        $nome=$_COOKIE["nome"];
        $query .="AND e.nome LIKE '%$nome%'";}


    if(isset($_COOKIE["categoria"])){
        $categoria=$_COOKIE["categoria"];
        $queryCat="SELECT id  from categoria where nome='$categoria' ";
        $datiCat=mysqli_query($connect, $queryCat);
        //echo("error: " . mysqli_error($connect));

        $resultCat=mysqli_fetch_array($datiCat);
        $idcat=$resultCat["id"];

        $query .=" AND e.id_categoria=$idcat";}

    if(isset($_COOKIE["stato"])){
        $stato=$_COOKIE["stato"];

        $query .=" AND e.stato='$stato'";}

    if(isset($_COOKIE["citta"])){
        $citta=$_COOKIE["citta"];

        $query .=" AND e.luogo='$citta'";}




    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    //echo("error: " . mysqli_error($connect));



    return $dati;}

function select_ordini($connect){
    $query="SELECT o.codice_ticket, o.spedizione, e.codice codice_evento, o.id as idticket, u.nome, u.cognome, e.nome as evento, o.costo, c.nome as categoria from evento e join categoria c on(e.id_categoria=c.id) join ordine o on (o.id_evento=e.id) join utente u on (u.id=o.id_utente) group by o.id_evento,o.data, o.id_utente";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_ordine($connect, $id){
    $query="SELECT o.codice_ticket, o.nome_evento, o.biglietti, o.biglietti_vip, o.data, o.orario,  o.spedizione, e.codice codice_evento, e.costo as costoB, e.costo_vip as costoBS, o.id as idticket, u.nome, u.cognome, e.nome as evento, o.costo, o.via, o.cap, o.stato, o.città, c.nome as categoria from evento e join categoria c on(e.id_categoria=c.id) join ordine o on (o.id_evento=e.id) join utente u on (u.id=o.id_utente) where o.id=$id";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}

function select_ordine_utente($connect, $id){
    $query="SELECT e.id as id_evento, o.id as id_ordine, o.codice_ticket, o.nome_evento, o.biglietti, o.biglietti_vip, o.data, o.orario,  o.costo, e.codice codice_evento, e.costo as costoB, e.costo_vip as costoBS, o.id as idticket, u.nome, u.cognome, e.nome as evento from evento e join categoria c on(e.id_categoria=c.id) join ordine o on (o.id_evento=e.id) join utente u on (u.id=o.id_utente) where u.id=$id group by o.id_evento,o.data, o.id_utente";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}


function select_evento_calendario($connect, $id){
    $query="SELECT e.id, e.nome as evento, giorno1, giorno2, giorno3, giorno4, giorno5, giorno6, giorno7, giorno8, giorno9, giorno10, giorno11, giorno12 from evento e  where e.id=$id ";
    $dati=mysqli_query($connect, $query);
    //or die ("Non riesco ad eseguire la query $dati");
    return $dati;}




        
        
        
