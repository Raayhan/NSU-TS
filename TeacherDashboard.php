<?php
require_once 'connect.php';
include('TeacherRegister.php');

if(!isset($_SESSION['teacher']))
{
    // not logged in
    header('Location: index.php');
    exit();
}





if (isset($_GET['signout'])) {
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
                 <div class="header-left">
                   <ul>
                       <li style="background-color: #60151A;"><a href="TeacherDashboard.php"><i class="fa fa-home" aria-hidden="true"> </i>Home</a></li>
                       <li><a href="TeacherProfile.php"><i class="fa fa-users" aria-hidden="true"></i>Profile</a></li>
                       <li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>Preferences</a></li>
                   </ul>
                </div>
               </div>
               <div class="col-md-1 left nopadding">
                 <div class="header-right">
                   <div class="dropdown">
                     <button class="dropbtn">SIGN OUT</button>
                     <div class="dropdown-content">
                       <a href="#">Settings</a>
                       <a href="TeacherSignout.php">Sign Out</a>
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


             <h2>Welcome  !</h2>

             <?php  if (isset($_SESSION['teacher'])) : ?>

               <html>
                    <form class="text-center border border-light p-5" method="POST" action="Subject.php"> 
                    <h6 style="font-family: 'Coustard', serif;"><?php echo $_SESSION['teacher']['first_name'].' '.$_SESSION['teacher']['last_name'];?></h6><br><br>
                    <h5><b>Subject-Wise Tution Registration From</b></h5><br>

                    <div class="form-row mb-4">
                                <div class="col">
                                    <!-- First name -->
                                    <input type="text" name="first_name" class="form-control" placeholder="First name" require>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                </div>
                            </div>

                            <!--Subject -->
                            <input type="text" name="subject_name" class="form-control mb-4" placeholder="Which Subject You Want to Tituion" require>

                            <!-- E-mail -->
                            <input type="email" name="e_mail" class="form-control mb-4" placeholder="E-mail" require>


                            <!-- Phone number -->
                            <input type="number" name="phone" class="form-control" placeholder="Phone Number" aria-describedby="defaultRegisterFormPhoneHelpBlock" require>
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
                                          <option value="Others">Others</option>

                                        </select>
                                    </div>

                                    </div>
                            </div>
                                   

                    <input class="submit-button" type="submit" name="Submit" value="SUBMIT">


               </html>

             <?php endif ?>

           </div>
         </div>
       </div>
     </div>



     <!-- MAIN CONTAINER  End -->





     <!-- logged in user information -->







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
