<?php
    $uname = $_POST['uname'];
    $Address = $_POST['Address'];
    $pnumber = $_POST['pnumber'];
    $schedule = $_POST['schedule'];
     //create connection
    $conn = new mysqli('localhost','root','','foodigo');

    if ($conn->connect_error){

        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into delivery(uname,Address,pnumber,schedule) values(?,?,?,?)");
        $stmt->bind_param("ssis",$uname,$Address,$pnumber,$schedule);
        $stmt->execute();
        echo"Submission Successfully....";
        $stmt->close();
        $conn->close();
    }

?>    