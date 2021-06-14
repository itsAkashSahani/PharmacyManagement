<?php

include 'connect.php';

session_start();

extract($_POST);

$search = $_POST['search'];

$data = '
<table class="table table-bordered table-striped">
<tr>
    <th>Id</th>
    <th>Brand Name</th>
    <th>Generic Name</th>
    <th>Category</th>
    <th>Expiry Date</th>
    <th>Selling Price</th>
    <th>Select</th>
</tr>';

$sql = "SELECT * FROM `medicines`";

if ($search != '') {
    $sql .= "WHERE `brandname` like '%$search%' or `medid` like '%$search%'
    or `genname` like '%$search%' or `mcategory` like '%$search%'";
}

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data .= '
    <tr>
        <td>' . $row['medid'] . '</td>
        <td>' . $row['brandname'] . '</td>
        <td>' . $row['genname'] . '</td>
        <td>' . $row['mcategory'] . '</td>
        <td>' . $row['xdate'] . '</td>
        <td>' . $row['sprice'] . '</td>
        <td>
            <div class="d-flex"><input type="checkbox" class="align-self-center mx-auto" id="mselect" onchange="saveMed('.$row['medid'].') ">
            </div>
        </td>
    </tr>';
    }
}
$data .= '</table>';
echo $data;
