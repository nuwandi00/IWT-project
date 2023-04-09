<?php
    $productname = $_POST['productname'];
    $quantity = $_POST['quantity'];
    $brand = $_POST['brand'];
    $other = $_POST['other'];
 
    //create connection
    $conn = new mysqli('localhost','root','','foodigo');

    if ($conn->connect_error){

        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into cart(productname, quantity, brand, other) values(?,?,?,?)");
        $stmt->bind_param("siss",$productname, $quantity, $brand, $other);
        $stmt->execute();
        echo"Submission Successfully....";
        $stmt->close();
        $conn->close();
    }

?>    