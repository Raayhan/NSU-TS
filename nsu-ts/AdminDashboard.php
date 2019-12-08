<?php
require_once 'connect.php';
include('AdminLogin.php');
include('StudentSearch.php');

if(!isset($_SESSION['admin']))
{
    // not logged in
    header('Location: index.php');
    exit();
}





if (isset($_GET['signout'])) {
	session_destroy();
	unset($_SESSION['admin']);
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




    <style>
      table,th,td {
        border : 1px solid black;
        border-collapse: collapse;
      }
      th,td {
        padding: 5px;
      }
  </style>


     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


     <title>Admin Panel | NSU-TS</title>
     <script>
     // Search name without loading page
          function searchStudentName(str){
            if(str.length == 0){
              document.getElementById('suggestion').innerHTML = '';
            }
            else{
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("suggestion").innerHTML = this.responseText;
                }
              };
              xmlhttp.open("GET", "StudentSearch.php?student="+ str , true);
              xmlhttp.send();
            }

          }

          function searchTeacherName(str){
            if(str.length == 0){
              document.getElementById('suggestionT').innerHTML = '';
            }
            else{
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("suggestionT").innerHTML = this.responseText;
                }
              };
              xmlhttp.open("GET", "TeacherSearch.php?teacher="+ str , true);
              xmlhttp.send();
            }

          }
     </script>

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
                       <li style="background-color: #60151A;"><a href="AdminDashboard.php">Admin Panel</a></li>
                       <li><a href="AdminProfile.php">Profile</a></li>
                       <li><a href="#">Preferences</a></li>
                   </ul>
                </div>
               </div>
               <div class="col-md-1 left nopadding">
                 <div class="header-right">
                   <div class="dropdown">
                     <button class="dropbtn">SIGN OUT</button>
                     <div class="dropdown-content">
                       <a href="#">Settings</a>
                       <a href="AdminSignout.php">Sign Out</a>
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

             <?php  if (isset($_SESSION['admin'])) : ?>

               <html>
                    <h6 style="font-family: 'Coustard', serif;"><?php echo $_SESSION['admin']['first_name'];?></h6>

               </html>
               <div class="profile-title">



                              <?php endif ?>
                              <div class="container">
                                  <div class="row my-2">
                                      <div class="col-lg-8 order-lg-2">
                                          <ul class="nav nav-tabs">
                                              <li class="nav-item">
                                                  <a href="" data-target="#student" data-toggle="tab" class="nav-link active">Student Data</a>
                                              </li>

                                              <li class="nav-item">
                                                  <a href="" data-target="#teacher" data-toggle="tab" class="nav-link">Teacher Data </a>
                                              </li>
                                          </ul>
                                          <div class="tab-content py-4">
                                              <div class="tab-pane active" id="student"><BR><BR>



                                                 <div class="">
                                                     <label for="">Student Name:  </label>
                                                     <input type="text" name="name" value="" placeholder="Type Student Name" onkeyup="searchStudentName(this.value)">
                                                     <p><span  id="suggestion"></span> </p>

                                                 </div>


                                                                                                  <!--/row-->
                                              </div>

                                              <div class="tab-pane" id="teacher"><BR><BR>

                                                   <div class="">
                                                       <label for="">Teacher Name: </label>
                                                       <input type="text" name="name" value="" placeholder="Type Teacher Name" onkeyup="searchTeacherName(this.value)">
                                                       <p><span  id="suggestionT"></span> </p>

                                                   </div>
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
