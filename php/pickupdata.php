<?php
    $timeschedule = $_POST['timeschedule'];
    $branch = $_POST['branch'];
   
     //create connection
    $conn = new mysqli('localhost','root','','foodigo');

    if ($conn->connect_error)
    {

        die('Connection Failed : ' .$conn->connect_error);
    }else
    {
        $stmt = $conn->prepare("insert into pickup(timeschedule,branch) values(?,?)");
        $stmt->bind_param("ss",$timeschedule,$branch);
        $stmt->execute();
        echo"Submission Successfully....";
        $stmt->close();
        $conn->close();
    }

?>