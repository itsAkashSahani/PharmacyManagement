<?php

include 'connect.php';

session_start();

extract($_POST);

$data = '
<table class="table table-bordered table-striped">
<tr>
    <th>Brand Name</th>
    <th>Selling Price</th>
</tr>';

$total = 0;

if (isset($_POST['show'])) {
    $sql = "SELECT * FROM `purchase`";
    $run_query = mysqli_query($con, $sql);

    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_assoc($run_query)) {
            $temp = $row['mid'];
            $showsp = "SELECT * FROM `medicines` WHERE `medid` = $temp";
            $result = mysqli_query($con, $showsp);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $total = $total + $row['sprice'];
                    $data .= '
                            <tr>
                                <td>' . $row['brandname'] . '</td>
                                <td>' . $row['sprice'] . '</td>
                            </tr>';
                }
            }
        }
    }

    $data .= '<tr>
                <td>Total: </td>
                <td>' . $total . '</td>
            </tr>
            </table>';
    echo $data;
}
