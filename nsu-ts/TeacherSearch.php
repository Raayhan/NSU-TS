<?php
include('connect.php');

error_reporting(0);
  $q =  $_REQUEST['teacher'];
  $suggestionT = "";

  //mysqli_select_db($con,"ajax_demo");
  $sql="SELECT * FROM teachers WHERE first_name LIKE '%".$q."%' ";
  $result = mysqli_query($conn,$sql);
  if ($q != "") {
    $q = strtolower($q);
    $len = strlen($q);
    echo "<table>
    <tr>
    <th>Teacher Name</th>
    <th>Email</th>
    <th>Contact Number</th>
    <th>Department</th>
    <th>Gender</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
          echo "<tr>";
            echo "<td>" . $row["first_name"]." ".$row["last_name"]. "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
          echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
}


?>
