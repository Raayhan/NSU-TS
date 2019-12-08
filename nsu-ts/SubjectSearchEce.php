<?php
include('connect.php');

error_reporting(0);
  $q =  $_REQUEST['student'];
  $suggestion = "";

  //mysqli_select_db($con,"ajax_demo");
  $sql="SELECT * FROM subjects WHERE subject_name LIKE '%".$q."%' AND department='ECE'";
  $result = mysqli_query($conn,$sql);
  if ($q != "") {
    $q = strtolower($q);
    $len = strlen($q);
    echo "<table>
    <tr>
    <th>Student Name</th>
    <th>Email</th>
    <th>Contact Number</th>
    <th>Department</th>
    <th>Gender</th>
    <th>Subject</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
          echo "<tr>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['e_mail'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['subject_name']. "</td>";
          echo "</tr>";
    }
    echo '</table>';
    mysqli_close($conn);
}


?>
