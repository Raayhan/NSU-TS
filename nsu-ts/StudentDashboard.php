
<?php
require_once 'connect.php';
include('StudentRegister.php');
include('StudentLogin.php');

if(!isset($_SESSION['student']))
{
    // not logged in
    header('Location: index.php');
    exit();
}

if (isset($_GET['StudentSignout'])) {
	session_destroy();
	unset($_SESSION['student']);
	header('location: index.php');
}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <script src="scripts/script.js" type="text/javascript"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Home | NSU-TS</title>
  </head>
  <body>

    <!-- Header Start -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 nopadding">
          <div class="title">
            <a href="StudentDashboard.php"><img src="images/logo.png">North South University Tuition Services</a>
          </div>
        </div>
        <div class="col-md-12 nopadding">
          <div class="header">
              <div class="col-md-11 left nopadding">
                <div class="header-left" >
                  <ul>
                      <li><a href="StudentDashboard"><i class="fa fa-home" aria-hidden="true"> </i>Home</a></li>
                      <li><a href="StudentProfile.php"><i class="fa fa-users" aria-hidden="true"></i>Profile</a></li>
                      <li><a href="#preferences"><i class="fa fa-folder-open" aria-hidden="true"></i>Preferences</a></li>
                  </ul>
               </div>
              </div>
              <div class="col-md-1 left nopadding">
                <div class="header-right">
                  <div class="dropdown">
                    <button class="dropbtn">SIGN OUT</button>
                    <div class="dropdown-content">
                      <a href="#">Settings</a>
                      <a href="StudentSignout.php">Sign Out</a>
                    </div>
                  </div>
               </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->



    <!-- MAIN CONTAINER  Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>Welcome !</h2>

                         <?php  if (isset($_SESSION['student'])) : ?>

                           <html>
                                <h4 style="font-family:Book Antiqua;"><?php echo $_SESSION['student']['first_name'].' '.$_SESSION['student']['last_name'];?></h4>

                           </html>

                         <?php endif ?>

            <p>Please select your desired category for courses</p>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-image"><img src="images/NSU-SEPS.png"></div>
            <div class="my-box-content">
              <h2 class="my-box-title">SEPS</h2>
              <p class="my-box-text">School of Engineering & Physical Sciences</p>
              <a href="SEPS.html" class="box-button">Go</a>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-image"><img src="images/NSU-SBE.png"></div>
            <div class="my-box-content">
              <h2 class="my-box-title">SBE</h2>
              <p class="my-box-text">School of Business & Economics</p>
              <a href="SBE.html" class="box-button">Go</a>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-image"><img src="images/NSU-SHSS.png"></div>
            <div class="my-box-content">
              <h2 class="my-box-title">SHSS</h2>
              <p class="my-box-text">School Of Humanities & Social Sciences</p>
              <a href="/SBE" class="box-button">Go</a>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-image"><img src="images/NSU-SHLS.png"></div>
            <div class="my-box-content">
              <h2 class="my-box-title">SHLS</h2>
              <p class="my-box-text">School of Health & Life Sciences</p>
              <a href="/SBE" class="box-button">Go</a>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MAIN CONTAINER  End -->


    <!-- FOOTER Start -->
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
