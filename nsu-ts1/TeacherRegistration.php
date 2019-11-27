<?php
require_once 'connect.php';

include('TeacherRegister.php')
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/mdb.min.css" rel="stylesheet">
<script src="scripts/script.js" type="text/javascript"></script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<title>Teacher Registration | NSU-TS</title>
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
            </div>
          </div>
            <div class="bg">
               <div class="section-title">
                    <div align='center'>
                      <BR><BR><BR>
                        <div align='center' class="card text-center" style= "font-family: Book Antiqua; max-width: 50rem;">
                        <form class="text-center border border-light p-5" method="POST" action="TeacherRegister.php">
                            <?php echo display_error(); ?>
                            <h4 class="h4 mb-4">Teacher Registration</h4>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <!-- First name -->
                                    <input type="text" name="first_name" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                </div>
                            </div>

                            <!-- E-mail -->
                            <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">

                            <!-- Password -->
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

                            </small>
                            <input type="password" name="password" class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

                            </small>

                            <!-- Phone number -->
                            <input type="number" name="phone" class="form-control" placeholder="Phone Number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                            </small>

                            <div class="form-row mb-4">
                                      <div class="col">
                                        <select name="gender" class="browser-default custom-select">
                                          <option selected>Gender</option>
                                          <option value="male">Male</option>
                                          <option value="female">Female</option>
                                          <option value="others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                      <div class="col">
                                        <select name="department" class="browser-default custom-select">
                                          <option selected>Department</option>
                                          <option value="ece">ECE</option>
                                          <option value="bba">BBA</option>
                                          <option value="arch">Architecture</option>
                                          <option value="pharm">Pharmacy</option>
                                          <option value="others">others</option>

                                        </select>
                                    </div>

                                    </div>
                            </div>


                            <!-- Sign up button -->
                            <button class="btn btn-unique my-4 btn-block" name="register_btn" type="submit">Register</button>

                            <!-- Social register -->
                            <p>or register with</p>

                            <a href="#" class="btn btn-indigo btn-sm" role="button" aria-pressed="true">Facebook</a>
                            <a href="#" class="btn btn-deep-orange btn-sm" role="button" aria-pressed="true">Google</a>



                            <hr>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em> Register</em> you agree to our
                                <a href="TOS.html" target="_blank">terms of service</a>

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
