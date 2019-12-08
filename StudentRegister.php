<?php
if(!isset($_SESSION))
    {
        session_start();
    } 


$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, "nsu-ts");
// Check connection
if (!$conn)
      {
        die("Connection failed: " . mysqli_connect_error());
      }
// variable declaration
$first_name = "";
$last_name  = "";
$email      = "";
$phone      = "";
$gender     = "";
$department = "";
$password   ="";
$errors   = array();

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $first_name, $last_name, $email, $phone, $gender ,$department, $password;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
      $first_name   = $_POST["first_name"];
      $last_name    = $_POST["last_name"];
      $email        = $_POST["email"];
      $password     = $_POST["password"];
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
  if (empty($email)) {
    array_push($errors, "Email is required");
  }





    $query = "INSERT INTO students (first_name, last_name, email, password, phone, gender, department)
    VALUES ('$first_name', '$last_name', '$email', '$password', '$phone', '$gender', '$department')";

    if (mysqli_query($conn, $query)) {
      $_SESSION['success']  = "New user successfully created!!";
      header('location: StudentDashboard.php');
      }
    else {
     echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }




			// get id of the created user
			$logged_in_student_id = mysqli_insert_id($conn);

			$_SESSION['student'] = getUserById($logged_in_student_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: StudentDashboard.php');
		}



// return user array from their id
function getUserById($id){
	global $conn;
	$query = "SELECT * FROM students WHERE id=" . $id;
	$result = mysqli_query($conn, $query);

	$student = mysqli_fetch_assoc($result);
	return $student;
}




function display_error() {
	global $errors;

  	if (count($errors) > 0){
	   	echo '<div class="error">';
			foreach ($errors as $error){
			echo $error .'<br>';
			}
		echo '</div>';
	}
}


function isSignedIn()
{
	if (isset($_SESSION['student'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked

if (isset($_GET['StudentSignout'])) {
	session_destroy();
	unset($_SESSION['student']);
	header("location: index.php");
}


?>
