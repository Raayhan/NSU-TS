<?php

//allow sessions to be passed so we can see if the user is logged in

session_start();



//connect to the database so we can check, edit, or insert data to our users table

include('connect.php');

//include out functions file giving us access to the protect() function made earlier





//If the user has submitted the form

if (isset($_POST['login_btn'])) {
//protect the posted value then store them to variables

$email = ($_POST['email']);

$password =($_POST['password']);

//Check if the username or password boxes were not filled in

if(!$email || !$password){

//if not display an error message

echo "<center>You need to fill in a <b>Username</b> and a <b>Password</b>!</center>";

}else{

//if the were continue checking

//select all rows from the table where the username matches the one entered by the user

$res = mysqli_query($conn,"SELECT * FROM `students` WHERE `email` = '".$email."'");

$num = mysqli_num_rows($res);

//check if there was not a match

if($num == 0){

//if not display an error message

echo "<center>The <b>Username</b> you supplied does not exist!</center>";

}else{

//if there was a match continue checking

//select all rows where the username and password match the ones submitted by the user

$res = mysqli_query($conn,"SELECT * FROM `students` WHERE `email` = '".$email."' AND `password` = '".$password."'");

$num = mysqli_num_rows($res);

//check if there was not a match

if($num == 0){

//if not display error message

$message = "Incorrect Password.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
else{

  $logged_in_student_id = mysqli_fetch_assoc($res);

  $_SESSION['student'] =($logged_in_student_id); // put logged in user in session
  header('location:StudentDashboard.php');

}

}


}

}











?>
