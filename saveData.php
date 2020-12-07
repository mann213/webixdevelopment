<?php

$array = $_POST;
foreach ($array as $key => $value) {
  if($array['webix_operation']=='update'){
    $sql = "UPDATE Persons "
            . "SET name= '".$array['name']."' , "
            . "address = '".$array['address']."', "
            . "phone='".$array['phone']."' "
            . "WHERE id=".$array['id'].";";
    }
}

//$result1 = addslashes("{'address':'test1234'}");
include 'config/config.php';
try{
        
        $conn = mysqli_connect($server, $username, $password, $dbname);
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        }
        //while($i < count($result2)){
       // $sql = "UPDATE Persons SET address='".$array['id']."' WHERE id=2";
        //}
        if ($conn->query($sql) === TRUE) {
        //echo "Record updated successfully";
        } else {
        //echo "Error updating record: " . $conn->error;
        }
           
        mysqli_close($conn);
    }
    catch(Exception $e)
    {
  //      echo $e;   
    }
//echo json_encode("hi");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
