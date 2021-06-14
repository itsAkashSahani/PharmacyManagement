<?php

include 'connect.php';

$name = $_POST['name'];
$invoice = $_POST['invoiceno'];
$pur = date("m/d/y G.i:s", time());

$total = 0;


$sql = "SELECT * FROM `purchase`";
$run_query = mysqli_query($con, $sql);

if (mysqli_num_rows($run_query) > 0) {
    while ($mrow = mysqli_fetch_assoc($run_query)) {
        $temp = $mrow['mid'];
        $showsp = "SELECT * FROM `medicines` WHERE `medid` = $temp";
        $result = mysqli_query($con, $showsp);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $total = $row['sprice'];
            }
        }
        $sql = "INSERT INTO `sales` (`invoice`, `customer`, `meds`, `payed`, `purchasedon`)
        VALUES ('$invoice', '$name', '$temp', '$total', '$pur')";
                $run_query = mysqli_query($con, $sql);
    }
}

$sql = "DELETE FROM `purchase`";
$run_query = mysqli_query($con, $sql);

echo "Sales_Added";
