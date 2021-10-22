      <?php
        session_start();
    include("./connection.php");
        $connect=connection();
        if(isset($_POST["inviaRec"])){
            $idu=$_SESSION["id"];


            $idevento=$_SESSION["idevento"];
        $dettaglio=$_POST['dettaglio'];
            $dettaglio=str_replace("'", "&ap;", $dettaglio);





            $rating=$_POST['rating'];

            $query="insert into recensione VALUES (NULL,'$rating', '$dettaglio', '$idevento', '$idu')";
            $dati=mysqli_query($connect, $query);
            echo("error: " . mysqli_error($connect));

                
         header("location: ../details.php?id=$idevento");
            
        }
//$dettaglio=str_replace("'", "&ap;", $dettaglio); $dettaglio=str_replace("&ap;", "'", $dettaglio);

            
            ?>