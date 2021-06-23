<?php 
    
    include("../connection.php");

    $json = array();

    $query = 'SELECT image.id,image.path FROM image INNER JOIN immeubleimage on image.id=immeubleimage.idimage INNER JOIN immeuble ON immeuble.idm = immeubleimage.idimmeuble WHERE immeuble.idm=:id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $_POST['id']]);

    $riads = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($riads as $riad) 
    {
        $json[]=$riad;
    }

    echo json_encode($json);


?>