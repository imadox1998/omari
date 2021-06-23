<?php 
    
    include("../connection.php");

    $json = array();

    $query = 'SELECT * FROM immeuble WHERE idm=:id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $_POST['id']]);

    $riads = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($riads as $riad) 
    {
        $json[]=$riad;
    }

    echo json_encode($json);


?>