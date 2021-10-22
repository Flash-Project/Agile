<?php
if(isset($_POST["invia"])){
    include("../functions/connection.php");
        $connect=connection();
    session_start();

   // $idevento=$_SESSION["id_evento"];
$codiceA=$_POST["codiceA"];
$nome=$_POST["nome"];
$costo=$_POST["costo"];
    $costo=trim($costo,"$");

    $costoVip=$_POST["costoVip"];
    $costoVip=trim($costoVip,"$");

    $stato=$_POST["stato"];

$descriP=$_POST["descriP"];
$categoria=$_POST["categoria"];
    $sconto=$_POST["sconto"];

$tipologia=$_POST["tipologia"];
$luogo=$_POST["luogo"];
$dataI=$_POST["giorno"];
    $dataF=$_POST["dataF"];
    $via=$_POST["via"];
    $idevento=$_POST["idevento"];
    $giorno1=$_POST["giorno1"];
    $giorno2=$_POST["giorno2"];
    $giorno3=$_POST["giorno3"];
    $giorno4=$_POST["giorno4"];
    $giorno5=$_POST["giorno5"];
    $giorno6=$_POST["giorno6"];
    $giorno7=$_POST["giorno7"];
    $giorno8=$_POST["giorno8"];
    $giorno9=$_POST["giorno9"];
    $giorno10=$_POST["giorno10"];
    $giorno11=$_POST["giorno11"];
    $giorno12=$_POST["giorno12"];

    if(!$giorno2)
        $giorno2="0000-00-00";
    if(!$giorno3)
        $giorno3="0000-00-00";
    if(!$giorno4)
        $giorno4="0000-00-00";
    if(!$giorno5)
        $giorno5="0000-00-00";
    if(!$giorno6)
        $giorno6="0000-00-00";
    if(!$giorno7)
        $giorno7="0000-00-00";
    if(!$giorno8)
        $giorno8="0000-00-00";
    if(!$giorno9)
        $giorno9="0000-00-00";
    if(!$giorno10)
        $giorno10="0000-00-00";
    if(!$giorno11)
        $giorno11="0000-00-00";
    if(!$giorno12)
        $giorno12="0000-00-00";



    $biglietti=$_POST["biglietti"];
    $biglietti_vip=$_POST["bigliettiVip"];
    $orario=$_POST["orario"];

    if($sconto) {
    $query="select * from sconto where codice_sconto='$sconto'";
    $dati=mysqli_query($connect, $query);
    $valori=mysqli_fetch_array($dati);
    $codsconto=$valori["id"];
        $query="UPDATE evento SET id_sconto='$codsconto' where id='$idevento' limit 1";
        $query=mysqli_query($connect, $query);}
else{
    $query="UPDATE evento SET id_sconto=NULL where id='$idevento' limit 1";
    $query=mysqli_query($connect, $query);}

    $err=0;
    if((isset($_FILES["fotoP"])) && !empty ( $_FILES["fotoP"]["name"]))  {
        if ((($_FILES["fotoP"]["type"] == "image/gif")
                || ($_FILES["fotoP"]["type"] == "image/jpeg")
                || ($_FILES["fotoP"]["type"] == "image/pjpeg")
                || ($_FILES["fotoP"]["type"] == "image/png"))
            && ($_FILES["fotoP"]["size"] < 40000000))
        {
            move_uploaded_file($_FILES["fotoP"]["tmp_name"],
                "upload/" . $_FILES["fotoP"]["name"]);
            $foto_p=$_FILES["fotoP"]["name"];
            $query="UPDATE immagine SET nome='$foto_p' where (id_evento='$idevento' and tipo='principale')";
            $query=mysqli_query($connect, $query);

            echo("error: " . mysqli_error($connect));  }
        else
        {
            $err=1;
            echo "<script> alert('impossibile caricare la FOTO PRINCIPALE'); </script>";
        }
    }

    $err=0;
    if((isset($_FILES["fotoG1"])) && !empty ( $_FILES["fotoG1"]["name"]))  {
        if ((($_FILES["fotoG1"]["type"] == "image/gif")
                || ($_FILES["fotoG1"]["type"] == "image/jpeg")
                || ($_FILES["fotoG1"]["type"] == "image/pjpeg")
                || ($_FILES["fotoG1"]["type"] == "image/png"))
            && ($_FILES["fotoG1"]["size"] < 40000000))
        {
            move_uploaded_file($_FILES["fotoG1"]["tmp_name"],
                "upload/" . $_FILES["fotoG1"]["name"]);
            $fotoG1=$_FILES["fotoG1"]["name"];
            $query="UPDATE immagine SET nome='$fotoG1' where (id_evento='$idevento' and tipo='galleria1')";
            $query=mysqli_query($connect, $query);

            echo("error: " . mysqli_error($connect));  }
        else
        {
            $err=1;
            echo "<script> alert('impossibile caricare la FOTO GALLERIA 1'); </script>";
        }
    }
    $err=0;
    if((isset($_FILES["fotoG2"])) && !empty ( $_FILES["fotoG2"]["name"]))  {
        if ((($_FILES["fotoG2"]["type"] == "image/gif")
                || ($_FILES["fotoG2"]["type"] == "image/jpeg")
                || ($_FILES["fotoG2"]["type"] == "image/pjpeg")
                || ($_FILES["fotoG2"]["type"] == "image/png"))
            && ($_FILES["fotoG2"]["size"] < 40000000))
        {
            move_uploaded_file($_FILES["fotoG2"]["tmp_name"],
                "upload/" . $_FILES["fotoG2"]["name"]);
            $fotoG2=$_FILES["fotoG2"]["name"];
            $query="UPDATE immagine SET nome='fotoG2' where (id_evento='$idevento' and tipo='categoria2')";
            $query=mysqli_query($connect, $query);

            echo("error: " . mysqli_error($connect));  }
        else
        {
            $err=1;
            echo "<script> alert('impossibile caricare la FOTO GALLERIA 2'); </script>";
        }
    }
    $err=0;
    if((isset($_FILES["fotoG3"])) && !empty ( $_FILES["fotoG3"]["name"]))  {
        if ((($_FILES["fotoG3"]["type"] == "image/gif")
                || ($_FILES["fotoG3"]["type"] == "image/jpeg")
                || ($_FILES["fotoG3"]["type"] == "image/pjpeg")
                || ($_FILES["fotoG3"]["type"] == "image/png"))
            && ($_FILES["fotoG3"]["size"] < 40000000))
        {
            move_uploaded_file($_FILES["fotoG3"]["tmp_name"],
                "upload/" . $_FILES["fotoG3"]["name"]);
            $fotoG3=$_FILES["fotoG3"]["name"];
            $query="UPDATE immagine SET nome='$fotoG3' where (id_evento='$idevento' and tipo='galleria3')";
            $query=mysqli_query($connect, $query);

            echo("error: " . mysqli_error($connect));  }
        else
        {
            $err=1;
            echo "<script> alert('impossibile caricare la FOTO GALLERIA 3'); </script>";
        }
    }
    $err=0;
    if((isset($_FILES["fotoG4"])) && !empty ( $_FILES["fotoG4"]["name"]))  {
        if ((($_FILES["fotoG4"]["type"] == "image/gif")
                || ($_FILES["fotoG4"]["type"] == "image/jpeg")
                || ($_FILES["fotoG4"]["type"] == "image/pjpeg")
                || ($_FILES["fotoG4"]["type"] == "image/png"))
            && ($_FILES["fotoG4"]["size"] < 40000000))
        {
            move_uploaded_file($_FILES["fotoG4"]["tmp_name"],
                "upload/" . $_FILES["fotoG4"]["name"]);
            $fotoG4=$_FILES["fotoG4"]["name"];
            $query="UPDATE immagine SET nome='$fotoG4' where (id_evento='$idevento' and tipo='galleria4')";
            $query=mysqli_query($connect, $query);

            echo("error: " . mysqli_error($connect));  }
        else
        {
            $err=1;
            echo "<script> alert('impossibile caricare la FOTO GALLERIA 4'); </script>";
        }
    }
    $err=0;
    if((isset($_FILES["fotoG5"])) && !empty ( $_FILES["fotoG5"]["name"]))  {
        if ((($_FILES["fotoG5"]["type"] == "image/gif")
                || ($_FILES["fotoG5"]["type"] == "image/jpeg")
                || ($_FILES["fotoG5"]["type"] == "image/pjpeg")
                || ($_FILES["fotoG5"]["type"] == "image/png"))
            && ($_FILES["fotoG5"]["size"] < 40000000))
        {
            move_uploaded_file($_FILES["fotoG5"]["tmp_name"],
                "upload/" . $_FILES["fotoG5"]["name"]);
            $fotoG5=$_FILES["fotoG5"]["name"];
            $query="UPDATE immagine SET nome='$fotoG5' where (id_evento='$idevento' and tipo='categoria5')";
            $query=mysqli_query($connect, $query);

            echo("error: " . mysqli_error($connect));  }
        else
        {
            $err=1;
            echo "<script> alert('impossibile caricare la FOTO GALLERIA 5'); </script>";
        }
    }
 
    
  if($categoria) {    
$query="select * from categoria where nome='$categoria'";
$dati=mysqli_query($connect, $query);
$valori=mysqli_fetch_array($dati);
    $codcategoria=$valori["id"];}

    if($tipologia) {
        $query="select * from tipologia where nome='$tipologia'";
        $dati=mysqli_query($connect, $query);
        $valori=mysqli_fetch_array($dati);
        $codtipologia=$valori["id"];}


    $query="UPDATE evento SET codice='$codiceA', nome='$nome', descrizione='$descriP', costo='$costo', costo_vip='$costoVip', luogo='$luogo', stato='$stato',  data_inizio='$dataI', via='$via',  data_fine='$dataF', orario='$orario', numero_biglietti='$biglietti', numero_biglietti_vip='$biglietti_vip', id_categoria='$codcategoria', id_tipologia='$codtipologia',  giorno1='$giorno1',  giorno2='$giorno2',  giorno3='$giorno3',  giorno4='$giorno4',  giorno5='$giorno5',  giorno6='$giorno6', giorno7='$giorno7', giorno8='$giorno8',  giorno9='$giorno9',  giorno10='$giorno10',  giorno11='$giorno11',giorno12='$giorno12' where id='$idevento' limit 1";
$query=mysqli_query($connect, $query);
    
echo("error: " . mysqli_error($connect));
    


  header("location: view-event.php");
   
}

?>