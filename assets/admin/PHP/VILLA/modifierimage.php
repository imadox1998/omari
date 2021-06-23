<?php 
    
    include("../connection.php");

    $idimage= $_POST['id'];
    $filename= $_FILES['Fichier']['name'];

    
    $query = 'UPDATE image SET path=:pathImage WHERE id= :id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $idimage,
                        ':pathImage' => $filename]);
    move_uploaded_file($_FILES['Fichier']['tmp_name'],'../../images/villa/'. $_FILES['Fichier']['name']);

    
    echo "OK";


?>