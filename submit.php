<?php

    include_once 'form.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    $conn = new mysqli('localhost','root','','form');
    if($conn->connect_error){
    	die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into formtable(name,address,location,contact,comment) values (?,?,?,?,?)");
    	$stmt->bind_param("sssss",$name,$address,$location,$contact,$comment);
    	$stmt->execute();
    }
    
    header("location: ../index.php?submit=success");

?>