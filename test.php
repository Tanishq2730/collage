<?php

    

    $name = $_POST['name'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
    	die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into registration(name,address,location,contact,message) values (?,?,?,?,?)");
    	$stmt->bind_param("sssss",$name,$address,$location,$contact,$message);
    	$stmt->execute();
        $stmt->close();
        $conn->close();
    }
    
   

?>