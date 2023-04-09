<?php
   
    $accnumber = $_POST['accnumber'];
    $amount = $_POST['amount'];
    $email = $_POST['email'];

    //create connetion

    $conn = new mysqli('localhost', 'root', '', 'foodigo');

    if ($conn->connect_error) {

        die('Connection Failed : ' .$conn->connect_error);
    } 
    else {
        $stmt = $conn->prepare("insert into water( accnumber, amount, email) values(?,?,?)" );
        $stmt ->bind_param("iss", $accnumber, $amount, $email);
        $stmt ->execute();
        echo "Submitted Successfully....";
        $stmt ->close();
        $conn ->close();
    }

?>    