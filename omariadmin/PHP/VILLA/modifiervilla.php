<?php 
    
    include("../connection.php");

    $titre= $_POST['titre'];
    $Prix= $_POST['Prix'];
    $Superficie= $_POST['Supericie'];
    $Bedrooms= $_POST['Bedrooms'];
    $bathroom= $_POST['bathroom'];
    $Adresse= $_POST['Adresse'];

    $query = 'UPDATE immeuble SET titre=:titre,prix=:Prix,meters=:Superficie,bedrooms=:Bedrooms,bathrooms=:bathroom,Adresse=:Adresse WHERE idm= :id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $_POST['id'],
                        ':titre' => $titre,
                        ':Prix' => $Prix,
                        ':Superficie' => $Superficie,
                        ':Bedrooms' => $Bedrooms,
                          ':bathroom' => $bathroom,
                          ':Adresse' => $Adresse]);


    
    echo "OK";


?>