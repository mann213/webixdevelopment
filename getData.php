<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
  try{
       include 'config/config.php';
       // echo $server;
        $conn = mysqli_connect($server, $username, $password, $dbname);
        if($conn)
        {
            //echo "Connection successful";
        }
        else{
         //   echo "Connection Failed";
        }
        $result = $conn->query("select * from Persons");
        if($result)
        {
            
           $res = array();
            while($row = mysqli_fetch_assoc($result)){
                $res[] = ($row);
            }
            echo json_encode($res);
        }
        
        mysqli_close($conn);
       }
       catch(Exception $e)
       {
        //echo $e;   
       }
       
 ?>
      
