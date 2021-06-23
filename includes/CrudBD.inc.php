<?php
    require 'Connection.php';
	
	class CrudBD{
        public function con(){
            
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $conn;
                    }
                catch(PDOException $e)
                    {
                        return false;
                    }
        }

    public function list($statu,$type){  
        
        $servername = "localhost:3306";
        $username = "sidagqec";
        $password = "iVU36Vbv@f@26";
        $dbname="prjimmeuble";
        $conn=mysqli_connect($servername,$username, $password,$dbname);
        $res =array();
        $sql = "SELECT * FROM immeuble ";
        if($result = mysqli_query($conn, $sql)){
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    
                       $res[]=$row;
                    
                }
                
                // Free result set
                mysqli_free_result($result);
            }
     }
     return $res;
    }
public function lastimg($id){
        $servername = "localhost:3306";
        $username = "sidagqec";
        $password = "iVU36Vbv@f@26";
        $dbname="prjimmeuble";
        $conn=mysqli_connect($servername,$username, $password,$dbname);
        $res ="";
        $sql = "SELECT i.path FROM immeubleimage b inner join image i on b.idimage=i.id where idimmeuble=".$id;
        if($result = mysqli_query($conn, $sql)){   
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $res=$row['path'];
                }
                
                // Free result set
                mysqli_free_result($result);
        }
            return $res;
     }
     
    


    }
