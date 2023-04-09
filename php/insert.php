<?php
        $FirstName = $_POST['FirstName'];
        $LastName= $_POST['LastName'];
        $UserName = $_POST['UserName'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        //password and confirmpassword validation
        if ($_POST['password'] !== $_POST['confirmpassword']) {
        die('Password and Confirm password not match!...Try Again!!!');   
        }





    if (!empty($FirstName) || !empty($LastName) ||
        !empty($UserName) || !empty($Email) ||
        !empty($password) ||!empty($confirmpassword)) {
        
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "foodigo";

        //create connection

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if (mysqli_connect_error()) {
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            $Select = "Select Email FROM signup WHERE Email = ? LIMIT 1";
            $Insert = "Insert INTO signup(FirstName, LastName, UserName, Email , password , confirmpassword) values(?, ?, ?, ?, ?, ?)";

            //prepare statement

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $Email);
            $stmt->execute();
            $stmt->bind_result($Email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssss",$FirstName, $LastName, $UserName, $Email , $password, $confirmpassword);
                $stmt->execute();
                    echo "New record inserted sucessfully.";
                } else {
                   echo "someone already resgistered  using this email";
                }
            }
            
            $stmt->close();
            $conn->close();
        }
    
    else {
        echo "All field are required.";
        die();
    }

?>