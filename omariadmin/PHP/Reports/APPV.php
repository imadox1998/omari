<?php 
    
    include("../Connection.php");

    $json = array();

    $query = 'SELECT COUNT(*) as number FROM immeuble WHERE Type="Appartment" AND Statu="vente"
';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute();

    $riads = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($riads as $riad) 
    {
        $json[]=$riad;
    }

    echo json_encode($json);


?>