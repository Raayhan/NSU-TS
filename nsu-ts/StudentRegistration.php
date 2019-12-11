<?php
require_once 'connect.php';

include('StudentRegister.php')
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
<script src="scripts/script.js" type="text/javascript"></script>
<script src="https://use.fontawesome.com/56f6746f8e.js"></script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<title>Student Registration | NSU-TS</title>
<style>



body, html {
background-color: #ECF9FF;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://i.ibb.co/PhVFM7H/welcome.png");

  /* Full height */


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
              <div class="col-md-12 nopadding">
                <div class="header">
                    <div class="col-md-11 left nopadding">
                      <div class="header-left">
                        <ul>
                            <li><a href="index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                            <li><a href="Contact.php"><i class="fa fa-phone"aria-hidden="true"></i> Contact us</a></li>


                        </ul>
                     </div>
                    </div>
                    <div class="col-md-1 right nopadding">
                      <div class="header-right">

                        <div class="dropdown">
                          <button class="dropbtn"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
                          <div class="dropdown-content">
                            <a href="StudentRegistration.php"><i class="fa fa-male" aria-hidden="true"></i> As Student</a>
                            <a href="TeacherRegistration.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> As Teacher</a>
                          </div>
                        </div>
                     </div>
                    </div>

                </div>
              </div>
            </div>
          </div>
            <div class="bg">
               <div class="section-title">
                    <div align='center'>
                      <BR><BR><BR>
                        <div align='center' class="card text-center" style= "font-family: 'Coustard', serif; max-width: 50rem;">
                        <form class="text-center border border-light p-5" method="POST" action="StudentRegister.php">
                            <?php echo display_error(); ?>
                            <h3 class="h4 mb-4"><i class="fa fa-id-card" aria-hidden="true"></i> Student Registration</h3>


                            <div class="form-row mb-4">

                                <div class="col">
                                    <!-- First name -->
                                    <input type="text" name="first_name" class="form-control" placeholder="First name"required>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name"required>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <input type="email" name="email" class="form-control mb-4" placeholder="E-mail"required>

                            <!-- Password -->
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"required>
                            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

                            </small>
                            <input type="password" name="password" class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"required>
                            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

                            </small>

                            <!-- Phone number -->
                            <input type="number" name="phone" class="form-control" placeholder="Phone Number" aria-describedby="defaultRegisterFormPhoneHelpBlock"required>
                            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                            </small>

                            <div class="form-row mb-4">
                                      <div class="col">
                                        <select name="gender" class="browser-default custom-select">
                                          <option selected>Gender</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                          <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                      <div class="col">
                                        <select name="department" class="browser-default custom-select">
                                          <option selected>Department</option>
                                          <option value="ECE">ECE</option>
                                          <option value="BBA">BBA</option>
                                          <option value="Architecture">Architecture</option>
                                          <option value="Pharmacy">Pharmacy</option>
                                          <option value="Civil">Civil Enngineering</option>
                                          <option value="Others">Others</option>
                                        </select>
                                    </div>

                                    </div>
                            </div>


                            <!-- Sign up button -->
                            <button class="btn btn-dark-green my-4 btn-block" name="register_btn" type="submit"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>

                            <!-- Social register -->
                            <p>or register with</p>

                            <a href="#" class="btn btn-indigo btn-sm" role="button" aria-pressed="true"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn btn-deep-orange btn-sm" role="button" aria-pressed="true"><i class="fa fa-google" aria-hidden="true"></i> Google</a>



                            <hr>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em> Register</em> you agree to our
                                <BR>

                                <a class="btn btn-elegant" href="TOS.html" style="width:auto;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Terms of Services</a>



                     </form>


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
