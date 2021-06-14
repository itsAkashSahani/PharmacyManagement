<?php

include 'connect.php';

session_start();

extract($_POST);

$checkVal = $_POST['mid'];

$sql = "INSERT INTO `purchase` VALUES ('$checkVal')";
$run_query = mysqli_query($con, $sql);

