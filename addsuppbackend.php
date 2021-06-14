<?php

include 'connect.php';

$suppname = $_POST['suppname'];
$cperson = $_POST['cperson'];
$contact = $_POST['contact'];
$addr = $_POST['address'];

$sql = "INSERT INTO `supplier` (`suppname`, `cperson`, `contact`,`address`) 
            VALUES ('$suppname', '$cperson', '$contact', '$addr')";

$run_query = mysqli_query($con, $sql);

if ($run_query) {
    echo "Supp_Added";
} else {
    echo $sql;
    exit();
}
