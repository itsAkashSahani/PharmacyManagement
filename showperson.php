<?php

include 'connect.php';

session_start();

extract($_POST);

if (isset($_POST['showSp'])) {
    $data = '
        <table class="table table-bordered table-striped">
        <tr>
            <th>Id</th>
            <th>Employee Name</th>
            <th>Contact No.</th>
            <th>Qualification</th>
            <th>Experience</th>
            <th>UID No.</th>
            <th>Salary <span class="fas fa-rupee-sign"></span></th>
        </tr>';

    $showsp = "SELECT * FROM `employee` ORDER BY `empid` DESC";
    $result = mysqli_query($con, $showsp);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $data .= '
                <tr>
                    <td>' . $row['empid'] . '</td>
                    <td>' . $row['fname'] . ' ' . $row['lname'] .'</td>
                    <td>' . $row['econtact'] . '</td>
                    <td>' . $row['qualification'] . '</td>
                    <td>' . $row['experience'] . '</td>
                    <td>' . $row['uid'] . '</td>
                    <td>' . $row['salary'] . '</td>
                </tr>';
        }
    }
    $data .= '</table>';
    echo $data;
}