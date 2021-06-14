<?php

include 'connect.php';

session_start();

extract($_POST);

if (isset($_POST['showMed'])) {
    $data = '
        <table class="table table-bordered table-striped">
        <tr>
            <th>Id</th>
            <th>Brand Name</th>
            <th>Generic Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Arrival Date</th>
            <th>Expiry Date</th>
            <th>Orignal Price</th>
            <th>Selling Price</th>
            <th>Quantity</th>
            <th>Supplier</th>
            <th>Added By</th>
        </tr>';

    $showmed = "SELECT * FROM `medicines` ORDER BY `medid` DESC";
    $result = mysqli_query($con, $showmed);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $data .= '
                <tr>
                    <td>' . $row['medid'] . '</td>
                    <td>' . $row['brandname'] . '</td>
                    <td>' . $row['genname'] . '</td>
                    <td>' . $row['mcategory'] . '</td>
                    <td>' . $row['description'] . '</td>
                    <td>' . $row['adate'] . '</td>
                    <td>' . $row['xdate'] . '</td>
                    <td>' . $row['oprice'] . '</td>
                    <td>' . $row['sprice'] . '</td>
                    <td>' . $row['qty'] . '</td>
                    <td>' . $row['supplier'] . '</td>
                    <td>' . $row['executive'] . '</td>
                </tr>';
        }
    }
    $data .= '</table>';
    echo $data;
}