<?php

    include("../connection.php");
   
    $idvilla= $_POST['id'];
    $filename= $_FILES['Fichier']['name'];
    //echo $_FILES['Fichier']['tmp_name'];

    //echo $filename.'   '.$idRiad;


    $sql = "insert into image values ('', '$filename')";
    $conn->exec($sql);
    $idimage = $conn->lastInsertId();
    move_uploaded_file($_FILES['Fichier']['tmp_name'],'../../images/villa/'. $_FILES['Fichier']['name']);

    $sql = "insert into immeubleimage values ('', '$idimage','$idvilla')";
    $conn->exec($sql);


    echo 'OK';


?>