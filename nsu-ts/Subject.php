<?php
if(!isset($_SESSION))
    {
        session_start();
    } 


$servername = "localhost";
$username   = "root";
$password   = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, "nsu-ts");
// Check connection
if (!$conn)
      {
        die("Connection failed: " . mysqli_connect_error());
      }
// variable declaration
$first_name     = "";
$last_name      = "";
$e_mail         = "";
$phone          = "";
$gender         = "";
$department     = "";
$subject_name   ="";
$errors         = array();

// call the register() function if register_btn is clicked
if (isset($_POST['Submit'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $first_name, $last_name, $e_mail, $phone, $gender ,$department, $subject_name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
      $first_name   = $_POST["first_name"];
      $last_name    = $_POST["last_name"];
      $e_mail       = $_POST["e_mail"];
      $subject_name = $_POST["subject_name"];
      $phone        = $_POST["phone"];
      $gender       = $_POST["gender"];
      $department   = $_POST["department"];




	// form validation: ensure that the form is correctly filled
	if (empty($first_name)) {
		array_push($errors, "First Name is required");
	}

	if (empty($last_name)) {
		array_push($errors, "Last Name is required");
	}
  if (empty($e_mail)) {
    array_push($errors, "Email is required");
  }





    $query = "INSERT INTO subjects (first_name, last_name, e_mail, phone, gender, department, subject_name)
    VALUES ('$first_name', '$last_name', '$e_mail', '$phone', '$gender', '$department', '$subject_name')";

    if (mysqli_query($conn, $query)) {
      $_SESSION['success']  = "New user successfully created!!";
      header('location: TeacherDashboard.php');
      }
    else {
     echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }


}


function isSignedIn()
{
	if (isset($_SESSION['teacher'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked

if (isset($_GET['TeacherSignout'])) {
	session_destroy();
	unset($_SESSION['teacher']);
	header("location: index.php");
}


?>
