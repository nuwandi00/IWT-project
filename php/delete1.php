<?php

include 'conn1.php';

$id = $_GET['id'];

$q = " DELETE FROM `login` WHERE id = $id ";

mysqli_query($con, $q);

header('location:display1.php');

?>