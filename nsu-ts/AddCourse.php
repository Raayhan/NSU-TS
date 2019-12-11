<?php
include('TeacherDashboard.php');
if(!isset($_SESSION))
    {
        session_start();
    }


include('connect.php');
// variable declaration


// call the register() function if register_btn is clicked
if (isset($_POST['Submit'])) {
	add();
}

// REGISTER USER
function add(){

  if (isset($_SESSION['teacher'])) :
	// call these variables with the global keyword to make them available in function
	global $conn, $name, $first_name, $last_name, $email, $phone;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
      $first_name   = $_SESSION['teacher']['first_name'];
      $last_name    = $_SESSION['teacher']['last_name'];
      $email        = $_SESSION['teacher']['email'];
      $name         = $_POST["name"];
      $phone        = $_SESSION['teacher']['phone'];;
    endif;




	// form validation: ensure that the form is correctly filled






    $query = "INSERT INTO courses ( name,first_name, last_name, email, phone)
    VALUES ('$name','$first_name', '$last_name', '$email', '$phone')";

    if (mysqli_query($conn, $query)) {
      $_SESSION['success']  = "New user successfully created!!";
      header('location: TeacherDashboard.php');
      }
    else {
     echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }



}




?>
