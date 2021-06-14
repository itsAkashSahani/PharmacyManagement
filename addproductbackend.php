<?php

include 'connect.php';

$bname = $_POST['brandname'];
$genname = $_POST['genericname'];
$mcat = $_POST['mcat'];
$desc = $_POST['desc'];
$adate = $_POST['adate'];
$xdate = $_POST['xdate'];
$oprice = $_POST['oprice'];
$sprice = $_POST['sprice'];
$qty = $_POST['qty'];
$supp = $_POST['supp'];
$eperson = $_POST['eperson'];

$sql = "INSERT INTO `medicines` (`brandname`, `genname`, `mcategory`,`description`, `adate`, `xdate`, `oprice`, `sprice`, `qty`, `supplier`, `executive`) 
            VALUES ('$bname', '$genname', '$mcat', '$desc', '$adate', '$xdate', '$oprice', '$sprice', '$qty', '$supp', '$eperson')";

$run_query = mysqli_query($con, $sql);

if ($run_query) {
    echo "Product_Added";
} else {
    echo $sql;
    exit();
}
