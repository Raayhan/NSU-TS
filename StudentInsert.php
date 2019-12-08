<?php
require_once 'connect.php';

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $department = $_POST["department"];



        $sql = "INSERT INTO students (first_name, last_name, email, password, phone, gender, department)
      VALUES ('$first_name', '$last_name', '$email', '$password', '$phone', '$gender', '$department')";

      if (mysqli_query($conn, $sql)) {
       header('Location:StudentDashboard.php');
      } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

?>
