<?php

include 'connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$qual = $_POST['qual'];
$exp = $_POST['exp'];
$uid = $_POST['uid'];
$sal = $_POST['sal'];

$sql = "INSERT INTO `employee` (`fname`, `lname`, `econtact`, `qualification`, `experience`, `uid`, `salary`) 
            VALUES ('$fname', '$lname', '$contact', '$qual', '$exp', '$uid', '$sal')";

$run_query = mysqli_query($con, $sql);

if ($run_query) {
    echo "Person_Added";
} else {
    exit();
}
