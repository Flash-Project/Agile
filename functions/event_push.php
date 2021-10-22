
<?php


        

      function insert_categoria($connect,$nome){
        
          $query="insert into categoria VALUES (NULL, '$nome')";
            $dati=mysqli_query($connect, $query);
          echo("error: " . mysqli_error($connect));
    }

    function insert_tipologia($connect,$nome){

        $query="insert into tipologia VALUES (NULL, '$nome')";
        $dati=mysqli_query($connect, $query)
            or die ("Non riesco ad eseguire la query $dati");
}



function insert_evento($connect, $nome, $codice, $costo, $descriP, $foto_p, $categoria,$tipologia, $luogo, $dataI, $biglietti, $dataF, $via, $fotoG1, $fotoG2, $fotoG3, $fotoG4, $fotoG5, $stato, $costoVip, $bigliettiVip, $orario, $sconto, $giorno1, $giorno2, $giorno3, $giorno4, $giorno5, $giorno6, $giorno7, $giorno8, $giorno9, $giorno10, $giorno11, $giorno12   ){

            
            $query="SELECT id as idcategoria FROM categoria where nome='$categoria'";
            $dati=mysqli_query($connect, $query);
            $valori=mysqli_fetch_array($dati);
            $idcategoria=$valori["idcategoria"];

    $query="SELECT id as idtipologia FROM tipologia where nome='$tipologia'";
    $dati=mysqli_query($connect, $query);
    $valori=mysqli_fetch_array($dati);
    $idtipologia=$valori["idtipologia"];

      if($sconto)     {
     $query="SELECT id as idsconto FROM sconto where codice_sconto='$sconto'";
    $dati=mysqli_query($connect, $query);
    $valori=mysqli_fetch_array($dati);
    $idsconto=$valori["idsconto"];
          $query="insert into evento VALUES (null, '$codice', '$nome', '$descriP', '$costo', '$costoVip', '$stato', '$luogo', '$via', '$dataI', '$dataF', '$orario', '$biglietti', '$bigliettiVip', '$idcategoria','$idtipologia', '$idsconto', '$giorno1', '$giorno2', '$giorno3', '$giorno4', '$giorno5', '$giorno6', '$giorno7', '$giorno8', '$giorno9', '$giorno10', '$giorno11', '$giorno12' )";
          $res=mysqli_query($connect, $query);
          echo("error: " . mysqli_error($connect));
      }

      else{
          $query="insert into evento VALUES (null, '$codice', '$nome', '$descriP', '$costo', '$costoVip', '$stato', '$luogo', '$via', '$dataI', '$dataF', '$orario', '$biglietti', '$bigliettiVip', '$idcategoria','$idtipologia', NULL, '$giorno1', '$giorno2', '$giorno3', '$giorno4', '$giorno5', '$giorno6', '$giorno7', '$giorno8', '$giorno9', '$giorno10', '$giorno11', '$giorno12' )";
    $res=mysqli_query($connect, $query);
    echo("error: " . mysqli_error($connect));}







            $query="SELECT MAX(id) as massimo FROM evento";
            $dati=mysqli_query($connect, $query);
            $valori=mysqli_fetch_array($dati);
            $idevento=$valori["massimo"];


    $query="insert into immagine VALUES (NULL,'$foto_p', 'principale', '$idevento')";
            $dati=mysqli_query($connect, $query);
           // echo("error: " . mysqli_error($connect));


    if($fotoG1){
        $query="insert into immagine VALUES (NULL,'$fotoG1', 'galleria1', '$idevento')";
        $dati=mysqli_query($connect, $query);
       // echo("error: " . mysqli_error($connect));
    }

    if($fotoG2){
        $query="insert into immagine VALUES (NULL,'$fotoG2', 'galleria2', '$idevento')";
        $dati=mysqli_query($connect, $query);
    }

    if($fotoG3){
        $query="insert into immagine VALUES (NULL,'$fotoG3', 'galleria3', '$idevento')";
        $dati=mysqli_query($connect, $query);
    }

    if($fotoG4){
        $query="insert into immagine VALUES (NULL,'$fotoG4', 'galleria4', '$idevento')";
        $dati=mysqli_query($connect, $query);
    }

    if($fotoG5){
        $query="insert into immagine VALUES (NULL,'$fotoG5', 'galleria5', '$idevento')";
        $dati=mysqli_query($connect, $query);
    }

            if($res){
                return 1;
            }

            return 0;

        }







