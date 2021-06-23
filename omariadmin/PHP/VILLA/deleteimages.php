<?php

    include("../connection.php");

    $json = array();
    //Update reunion
    $query = 'DELETE FROM image WHERE id = :id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $_POST['id']]);
    
    echo "OK";

?>