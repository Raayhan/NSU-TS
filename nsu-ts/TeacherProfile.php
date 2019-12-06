<?php
require_once 'connect.php';
include('TeacherRegister.php');


if(!isset($_SESSION['teacher']))
{
    // not logged in
    header('Location: index.php');
    exit();
}




if (isset($_GET['TeacherSignout'])) {
	session_destroy();
	unset($_SESSION['teacher']);
	header('location: index.php');
}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Marcellus+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coustard&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <script src="scripts/script.js" type="text/javascript"></script>
    <script src="https://use.fontawesome.com/56f6746f8e.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Profile | NSU-TS</title>
  </head>
  <body>

    <!-- Header Start -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 nopadding">
          <div class="title">
            <a href="TeacherDashboard.php"><img src="images/logo.png">North South University Tuition Services</a>
          </div>
        </div>
        <div class="col-md-12 nopadding">
          <div class="header">
              <div class="col-md-11 left nopadding">
                <div class="header-left" >
                  <ul>
                      <li><a href="TeacherDashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                      <li style="background-color: #60151A;"><a href="TeacherProfile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</a></li>

                  </ul>
               </div>
              </div>
              <div class="col-md-1 left nopadding">
                <div class="header-right">
                  <div class="dropdown">
                  <button class="dropbtn"><i class="fa fa-power-off" aria-hidden="true"></i> SIGN OUT</button>
                    <div class="dropdown-content">
                    <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>  Settings</a>
                      <a href="TeacherSignout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
                    </div>
                  </div>
               </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->


 <?php  if (isset($_SESSION['teacher'])) : ?>
    <!-- MAIN CONTAINER  Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h3 align=center>Profile | <?php echo $_SESSION['teacher']['first_name'].' '.$_SESSION['teacher']['last_name'];?></h3><BR>

          </div>
          <div class="profile-title">



                         <?php endif ?>
                         <div class="container">
                             <div class="row my-2">
                                 <div class="col-lg-8 order-lg-2">
                                     <ul class="nav nav-tabs">
                                         <li class="nav-item">
                                             <a href="" data-target="#profile" data-toggle="tab" class="nav-link active"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</a>
                                         </li>

                                         <li class="nav-item">
                                             <a href="" data-target="#edit" data-toggle="tab" class="nav-link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
                                         </li>
                                     </ul>
                                     <div class="tab-content py-4">
                                         <div class="tab-pane active" id="profile">

                                             <div class="row">
                                                 <div class="col-md-6";>
                                                   <div align='left' class="card border-primary mb-3" style="width:300rem; padding-left: 30px; padding-top:20px;">
                                                       <p>
                                                          <font color="red">  User Type :</font>   Teacher<BR><BR>
                                                          <font color="red">  Name :</font>   <?php echo $_SESSION['teacher']['first_name'].' '.$_SESSION['teacher']['last_name'];?><BR><BR>
                                                          <font color="red">  Email No : </font> <?php echo $_SESSION['teacher']['email'];?><BR><BR>
                                                          <font color="red">  Contact No :</font> <?php echo $_SESSION['teacher']['phone'];?><BR><BR>
                                                          <font color="red">  Gender :</font> <?php echo $_SESSION['teacher']['gender'];?><BR><BR>
                                                          <font color="red">  Department :</font> <?php echo $_SESSION['teacher']['department'];?><BR><BR>




                                                       </p>
                                                    </div>
                                                 </div>


                                             </div>
                                             <!--/row-->
                                         </div>

                                         <div class="tab-pane" id="edit" align="left">
                                             <form method="POST" action="UpdateStudent.php" >
                                                 <div class="form-group row">
                                                     <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                                     <div class="col-lg-9">
                                                         <input class="form-control" type="text" name="first_name" placeholder="First Name">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                                     <div class="col-lg-9">
                                                         <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                                     <div class="col-lg-9">
                                                         <input class="form-control" type="email" name="email" placeholder="Email">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                                     <div class="col-lg-9">
                                                         <input class="form-control" type="password" name="password" placeholder="Password">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label class="col-lg-3 col-form-label form-control-label">Contact Number</label>
                                                     <div class="col-lg-9">
                                                         <input class="form-control" type="number" name="phone" placeholder="Contact Number">
                                                     </div>
                                                 </div>




                                                 <div class="form-group row">
                                                     <label class="col-lg-3 col-form-label form-control-label">Department</label>
                                                     <div class="col-lg-9">
                                                         <select id="department" class="form-control" size="0" name="department">
                                                             <option value="ECE">ECE</option>
                                                             <option value="BBA">BBA</option>
                                                             <option value="Architecture">Architecture</option>
                                                             <option value="Pharmacy">Pharmacy</option>
                                                             <option value="Civil">Civil Enngineering</option>
                                                             <option value="Others">Others</option>
                                                         </select>
                                                     </div>
                                                 </div>

                                                 <div class="form-group row">
                                                     <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                                     <div class="col-lg-9">
                                                         <select id="gender" class="form-control" size="0" name="gender">
                                                             <option value="Male">Male</option>
                                                             <option value="Female">Female</option>
                                                             <option value="Other">Others</option>

                                                         </select>
                                                     </div>
                                                 </div>




                                                 <div class="form-group row">
                                                     <label class="col-lg-3 col-form-label form-control-label"></label>
                                                     <div class="col-lg-9">
                                                         <input type="reset" class="btn btn-danger" value="Cancel">
                                                         <input type="submit" class="btn btn-primary" name ="save-btn" value="Save Changes">
                                                     </div>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-2 order-lg-21 text-center">
                                     <img src="images/student.jpg" width="100px" height="150px"  alt="avatar" style="border-radius: 50%;">


                                 </div>
                             </div>
                         </div>
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
