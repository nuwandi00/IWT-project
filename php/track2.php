<?php
    $Onumber = $_POST['Onumber'];
    $Ydetails = $_POST['Ydetails'];
   
     //create connection
    $conn = new mysqli('localhost','root','','foodigo');

    if ($conn->connect_error)
    {

        die('Connection Failed : ' .$conn->connect_error);
    }else
    {
        $stmt = $conn->prepare("insert into track(Onumber,Ydetails) values(?,?)");
        $stmt->bind_param("is",$Onumber,$Ydetails);
        $stmt->execute();
        echo"Submission Successfully....";
        $stmt->close();
        $conn->close();
    }

?>