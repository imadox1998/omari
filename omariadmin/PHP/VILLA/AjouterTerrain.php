<?php

    include("../connection.php");
   
    $Titre= $_POST['Titre'];
    $Desc= $_POST['Desc'];
    $Prix= $_POST['Prix'];
    $Ref= $_POST['Ref'];
    $Superficie= $_POST['Superficie'];
    $Type= $_POST['Type'];
    $Statu= $_POST['Statu'];
    $adresse= $_POST['adresse'];


    if (isset($_FILES['pdf']['name'])) {
        $filename= $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'],'../../pdf/'. $_FILES['pdf']['name']);
    }
    else
    {
        $filename= "empty";
    }

    if (isset($_POST['video'])) {
        $idvideo=$_POST['video'];
    }
    else
    {
        $idvideo="A";    
    }
    
    
    $sql = "insert into immeuble values ('', '$Ref', '$Titre','$Desc', '$Prix' ,'0', '0','$Superficie','0','0','A','A','A','A','0','$Type','$adresse','$Statu','$idvideo','$filename')";
    $conn->exec($sql);
    $id = $conn->lastInsertId();
    $NRef = $Ref.$id;
    $sql = "UPDATE immeuble SET ref='$NRef' WHERE idm = $id";
    $conn->exec($sql);
    

    echo $id;


    
    /*
    //Ajouter Ressource
    $idPublication = $conn->lastInsertId();
    $sql = "insert into ressource values ('', '$Titre', 'Fichier', '$Genre' ,'$name', '$Desc', '$idPublication',NULL)";
    $conn->exec($sql);

    move_uploaded_file($_FILES['Fichier']['tmp_name'],'../fichier/Formateur/Exercice/'. $_FILES['Fichier']['name']);
    */
   
    
    
    
        

    
        
    


?>