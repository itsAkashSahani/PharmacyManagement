<?php

include 'connect.php';

session_start();

extract($_POST);

if (isset($_POST['showSupp'])) {
    $data = '
        <table class="table table-bordered table-striped">
        <tr>
            <th>Id</th>
            <th>Suppier Name</th>
            <th>Contact Person</th>
            <th>Contact No.</th>
            <th>Address</th>
        </tr>';

    $showsupp = "SELECT * FROM `supplier` ORDER BY `suppid` DESC";
    $result = mysqli_query($con, $showsupp);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $data .= '
                <tr>
                    <td>' . $row['suppid'] . '</td>
                    <td>' . $row['suppname'] . '</td>
                    <td>' . $row['cperson'] . '</td>
                    <td>' . $row['contact'] . '</td>
                    <td>' . $row['address'] . '</td>
                </tr>';
        }
    }
    $data .= '</table>';
    echo $data;
}