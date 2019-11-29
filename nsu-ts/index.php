<?php
require('connect.php');
include('StudentLogin.php'); // Includes Login Script

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link href="https://fonts.googleapis.com/css?family=Marcellus+SC&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Coustard&display=swap" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/mdb.min.css" rel="stylesheet">
<script src="scipts/script.js" type="text/javascript"></script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<title>Welcome | NSU-TS</title>

<style>

body {font-family: Copperplate Gothic Light;}

/* Full-width input fields */
input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 15%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

body, html {
background-color: #ECF9FF;

}

.bg {
  /* The image used */
  background-image: url("https://i.ibb.co/PhVFM7H/welcome.png");




  /* Center and scale the image nicely */

}
</style>
</head>
<body>



          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 nopadding">
                <div class="title">
                  <a href="index.php"><img src="images/logo.png">North South University Tuition Services</a>
                </div>
              </div>
            </div>
          </div>



            <div class="bg">
               <div class="section-title">
                    <div align='center'>
                      <BR><BR><BR>
                      <div align='center' class="card text-center" style= "font-family: 'Coustard', serif; max-width: 50rem;">
                        <div class="card-header">NSU-TS</div>
                        <div class="card-body">
                          <h3 class="card-title">login</h3>
                          <h6 class="card-title">as</h6>

                          <BR>

                          <a class="btn btn-elegant" onclick="document.getElementById('id01').style.display='block'" style="width:auto; text-transform:capitalize;">Student</a>
                                                          <div id="id01" class="modal">

                          <form class="modal-content animate" action="/StudentLogin.php" method="post">

                              <div class="imgcontainer">
                                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                  <img src="images/student.jpg" alt="Avatar" class="avatar">
                              </div>


                              <div class="container" style="font-family: 'Coustard', serif;">
                                  <h6> Student Login</h6>

                                  <label for="email"><b>E-mail</b></label>
                                  <input type="email" placeholder="Enter E-mail" name="email" required>
                                  <label for="psw"><b>Password</b></label>
                                  <input type="password" placeholder="Enter your Password" name="password" required>
                                  <button type="submit" name="login_btn">Login</button>
                                  <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                  </label>
                               </div>

                               <div class="container" style="background-color:#f1f1f1">
                                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                  <span class="psw"><a href="#">Forgot password?</a></span>
                               </div>
                            </form>
                        </div>

                                <script>
                                // Get the modal
                                var modal = document.getElementById('id01');

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }
                                </script>

                        <a class="btn btn-danger" onclick="document.getElementById('id02').style.display='block'" style="width:auto;text-transform:capitalize;">Teacher</a>
                        <div id="id02" class="modal">
                          <form class="modal-content animate" action="/TeacherLogin.php" method="post">
                              <div class="imgcontainer">
                                  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                                  <img src="images/student.jpg" alt="Avatar" class="avatar">
                              </div>


                              <div class="container" style="font-family: 'Coustard', serif;">
                                  <h6> Teacher Login</h6>
                                  <label for="TeacherEmail"><b>E-mail</b></label>
                                  <input type="email" placeholder="Enter E-mail" name="email" required>
                                  <label for="psw"><b>Password</b></label>
                                  <input type="password" placeholder="Enter your Password" name="password" required>
                                  <button type="submit" name="login_btn">Login</button>
                                  <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                  </label>
                               </div>

                               <div class="container" style="background-color:#f1f1f1">
                                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                                  <span class="psw"><a href="#">Forgot Password?</a></span>
                               </div>
                            </form>
                        </div>

                                <script>
                                // Get the modal
                                var modal = document.getElementById('id02');

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }
                                </script>




                        <br>

                        <br>

                      </div>


                      <h6 class="card-footer">If you are not already registerd ,<div class="dropdown">
                        <button class="dropbtn">Register</button>
                        <div class="dropdown-content">
                          <a href="StudentRegistration.php">As Student</a>
                          <a href="TeacherRegistration.php">As Teacher</a>
                        </div>
                        <BR><BR><BR><BR>
                      </h6>
                  </div>
              </div>
          </div>
      </div>





      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div class="footer-logo">
                <img src="images/logo.png">
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-about">
                <h2>About NSU-TS</h2>
                <p>NSU-TS - North South University Tuition Services is a platform
                   for NSU students to get help for their courses with proper tuition
                    service. It's also a platform for the students who want to earn
                     some money by giving tuitions to the students who need</p>

                     <a class="btn btn-light-green" onclick="document.getElementById('id03').style.display='block'" style="width:auto;color:black !important;border-radius:15px!important;font-family: 'Coustard', serif;text-transform:capitalize;">Admin Panel</a>
                                                     <div id="id03" class="modal">

                     <form class="modal-content animate" action="AdminLogin.php" method="post" style="text-align:center;">

                         <div class="imgcontainer">
                             <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                             <img src="images/student.jpg" alt="Avatar" class="avatar">
                         </div>


                         <div class="container" style="	font-family: 'Coustard', serif;">
                             <h6> Admin Login</h6>

                             <label for="email"><b>E-mail</b></label>
                             <input type="email" placeholder="Enter E-mail" name="email" required>
                             <label for="psw"><b>Password</b></label>
                             <input type="password" placeholder="Enter your Password" name="password" required>
                             <button type="submit" name="login_btn">Login</button>
                             <label>
                                   <input type="checkbox" checked="checked" name="remember"> Remember me
                             </label>
                          </div>

                          <div class="container" style="background-color:#f1f1f1">
                             <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
                             <span class="psw"><a href="#">Forgot password?</a></span>
                          </div>
                       </form>
                   </div>

                           <script>
                           // Get the modal
                           var modal = document.getElementById('id03');
                           // When the user clicks anywhere outside of the modal, close it
                           window.onclick = function(event) {
                               if (event.target == modal) {
                                   modal.style.display = "none";
                               }
                           }
                           </script>
              </div>
            </div>
            <div class="col-md-4">
              <div class="footer-news">
                <h2>NEWSLETTER</h2>
              </div>
              <div class="formvalidation">
                <div class="mainform">
                  <form name="myform" action="index.html" method="post" onsubmit="validate()">
                      <input type="email" name="email" placeholder="Enter Your Email">
                      <input class="submit-button" type="submit" name="Submit" value="SUBMIT">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>







<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
