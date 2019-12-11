<?php
include('connect.php');

error_reporting(0);
  $q =  $_REQUEST['courses'];
  $suggestionC = "";

  //mysqli_select_db($con,"ajax_demo");
  $sql="SELECT * FROM courses WHERE name LIKE '%".$q."%' ";
  $result = mysqli_query($conn,$sql);
  if ($q != "") {
    $q = strtolower($q);
    $len = strlen($q);
    echo "<table>
    <tr>
    <th>Course</th>
    <th>Teacher</th>
    <th>Email</th>
    <th>Contact No.</th>

    </tr>";
    while($row = mysqli_fetch_array($result)) {
          echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row["first_name"]." ".$row["last_name"]. "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";

          echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
}


?>
