<?php
   
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $postalcode = $_POST['postalcode'];
    $district = $_POST['district'];
    $message = $_POST['message'];


    //create connetion

    $conn = new mysqli('localhost', 'root', '', 'foodigo');

    if ($conn->connect_error) {

        die('Connection Failed : ' .$conn->connect_error);
    } 
    else {
        $stmt = $conn->prepare("insert into customersupport( name, address, city,phone,postalcode,district,message) values(?,?,?,?,?,?,?)" );
        $stmt ->bind_param("sssiiss", $name, $address, $city,$phone,$postalcode,$district,$message);
        $stmt ->execute();
        echo "Submitted Successfully....";
        $stmt ->close();
        $conn ->close();
    }

?>    