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
    $Bedrooms= $_POST['Bedrooms'];
    $Bathrooms= $_POST['Bathrooms'];
    $Levels= $_POST['Levels'];
    $kitchen= $_POST['kitchen'];  
    $Dining= $_POST['Dining'];
    $Living= $_POST['Living'];
    $AC= $_POST['AC'];
    $Parking= $_POST['Parking'];
    $Internet= $_POST['Internet'];


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
    
    
    $sql = "insert into immeuble values ('', '$Ref', '$Titre','$Desc', '$Prix' ,'$Bedrooms', '$Bathrooms','$Superficie','$Levels','$kitchen','$Dining','$Living','$AC','$Internet','$Parking','$Type','$adresse','$Statu','$idvideo','$filename')";
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