<?php
if(!isset($_SESSION))
    {
        session_start();
    }


include('connect.php');
// variable declaration
$first_name = "";
$last_name  = "";
$email      = "";
$phone      = "";
$gender     = "";
$department = "";
$password   ="";

if (isset($_POST['save_btn'])) {
	update();
}

function update(){
	// call these variables with the global keyword to make them available in function
	global $conn, $first_name, $last_name, $email, $phone, $gender ,$department, $password;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
    $first_name   = $_POST["first_name"];
    $last_name    = $_POST["last_name"];
    $email        = $_POST["email"];
    $password     = $_POST["password"];
    $phone        = $_POST["phone"];
    $gender       = $_POST["gender"];
    $department   = $_POST["department"];


      $query = mysql_query("UPDATE students SET first_name='$first_name', last_name='$last_name', email='$email', password='$password', phone='$phone', gender='$gender', department='$department' WHERE id='$id' LIMIT 1");
        //Create Debug Message
        if(!$query){
          echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
        //If query is good, head back to desired page.
        else{
        header('Location: StudentProfile.php');


          }
        }

      ?>
