<?php 
    
    include("../connection.php");

    $titre= $_POST['titre'];
    $Prix= $_POST['Prix'];
    $Superficie= $_POST['Supericie'];
    $descrption= $_POST['Desc'];
    $Adresse= $_POST['Adresse'];

    $query = 'UPDATE immeuble SET titre=:titre,prix=:Prix,meters=:Superficie,description=:descrption,Adresse=:Adresse WHERE idm= :id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $_POST['id'],
                        ':titre' => $titre,
                        ':Prix' => $Prix,
                        ':Superficie' => $Superficie,
                        ':descrption' => $descrption,
                          ':Adresse' => $Adresse]);


    
    echo "OK";


?>