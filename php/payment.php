<?php
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    $address = $_POST['address'];

    //create connetion

    $conn = new mysqli('localhost', 'root', '', 'foodigo');

    if ($conn->connect_error) {

        die('Connection Failed : ' .$conn->connect_error);
    } 
    else {
        $stmt = $conn->prepare("insert into payment(cardname, cardnumber, expmonth, expyear,cvv,address) values(?,?,?,?,?,?)" );
        $stmt ->bind_param("sisiis", $cardname, $cardnumber, $expmonth, $expyear,$cvv,$address);
        $stmt ->execute();
        echo "Submitted Successfully....";
        $stmt ->close();
        $conn ->close();
    }

?>    