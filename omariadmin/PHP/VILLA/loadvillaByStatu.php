<?php
//fetch.php
  include("../connection.php");
  if(isset($_POST["query"]))
  {
   $search = $_POST["query"];
   $query = "
    SELECT * FROM immeuble INNER JOIN immeubleimage on immeubleimage.idimmeuble = immeuble.idm INNER JOIN image ON image.id = immeubleimage.idimage WHERE immeuble.ref LIKE '%".$search."%' GROUP BY immeuble.idm ORDER BY immeuble.idm DESC
   ";
  }
  else
  {
   $query = "
  SELECT * FROM immeuble INNER JOIN immeubleimage on immeubleimage.idimmeuble = immeuble.idm INNER JOIN image ON image.id = immeubleimage.idimage GROUP BY immeuble.idm ORDER BY immeuble.idm DESC
   ";
  }
  $pdoStat = $conn->prepare($query);  

  $pdoStat->execute();

  $Topics = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

  foreach ($Topics as $Topic) 
 {
       $json[] = $Topic;
 }
    
 echo json_encode($json);
  
 

?>