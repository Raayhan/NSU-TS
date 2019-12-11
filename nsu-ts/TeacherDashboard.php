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
$first_name;
$last_name;
$email;
$phone;

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


     <title>Home | NSU-TS</title>
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
                 <div class="header-left">
                   <ul>
                       <li style="background-color: #60151A;"><a href="TeacherDashboard.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                       <li><a href="TeacherProfile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profile</a></li>
                       <li><a href="Contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact us</a></li>


                   </ul>
                </div>
               </div>
               <div class="col-md-1 left nopadding">
                 <div class="header-right">
                   <div class="dropdown">
                     <button class="dropbtn"><i class="fa fa-power-off" aria-hidden="true"></i> SIGN OUT</button>
                     <div class="dropdown-content">
                      <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
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



     <!-- MAIN CONTAINER  Start -->
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="section-title">


             <h2>Welcome  !</h2>

             <?php  if (isset($_SESSION['teacher'])) : ?>

               <html>
                    <h6 style="font-family: 'Coustard', serif;"><?php echo $_SESSION['teacher']['first_name'].' '.$_SESSION['teacher']['last_name'];?></h6>

               </html>

             <?php endif ?>


             <div class="container" style="font-family: 'Coustard', serif;" >
                 <div class="row my-2">
                     <div class="col-lg-8 order-lg-2" align=center>
                         <ul class="nav nav-tabs">
                             <li class="nav-item">
                                 <a href="" data-target="#status" data-toggle="tab" class="nav-link active"><i class="fa fa-comment" aria-hidden="true"></i> Status</a>
                             </li>

                             <li class="nav-item">
                                 <a href="" data-target="#panel" data-toggle="tab" class="nav-link"><i class="fa fa-bookmark" aria-hidden="true"></i> Teacher Panel</a>
                             </li>
                         </ul>
                         <div class="tab-content py-4">
                             <div class="tab-pane active" id="status"><BR>

                               <div class="card text-center">
                                  <div class="card-header">
                                    Currently Offering Courses
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <?php
                                    $sql = "SELECT name FROM courses WHERE phone = {$_SESSION['teacher']['phone']}";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                                   echo "" . $row["name"]. "<br>";

                                    }
                                    } else {
                                    echo "No Courses Available";
                                    }


                                    ?>


                                  </div>
                                  <div class="card-footer text-muted">
                                    2 days ago
                                  </div>
                                </div>



                                                                                 <!--/row-->
                             </div>

                             <div class="tab-pane" id="panel"><BR>
                               <h4><i class="fa fa-check-circle" aria-hidden="true"></i> Add a course for tuition</h4><BR>

                                 <?php  if (isset($_SESSION['teacher'])) : ?>

                                    <?php
                                      $first_name = $_SESSION['teacher']['first_name'];
                                      $last_name  = $_SESSION['teacher']['last_name'];
                                      $email      = $_SESSION['teacher']['email'];
                                      $phone      = $_SESSION['teacher']['phone'];
                                    ?>



                                 <?php endif ?>

                                 <form class="text-center border border-light p-5" method="POST" action="AddCourse.php">





                                         <div class="form-row mb-4">
                                                   <div class="col">
                                                     <select name="name" class="browser-default custom-select">
                                                       <option value="" selected="selected">Add A Course</option>
                                                      <optgroup label="ECE">
                                                       <option value="CSE 115">CSE115</option>
                                                       <option value="CSE 173">CSE173</option>
                                                       <option value="CSE 215">CSE215</option>
                                                       <option value="CSE 225">CSE225</option>
                                                       <option value="CSE 231">CSE231</option>
                                                       <option value="CSE 311">CSE311</option>
                                                       <option value="CSE 323">CSE323</option>
                                                       <option value="CSE 327">CSE327</option>
                                                       <option value="CSE 331">CSE331</option>
                                                       <option value="CSE 373">CSE373</option>
                                                       <option value="CSE 332">CSE332</option>
                                                       <option value="CSE 425">CSE425</option>
                                                      </optgroup>
                                                      <optgroup label="Arch">
                                                        <option value="ARC 111">ARC 111</option>
                                                        <option value="ARC 112">ARC 112</option>
                                                        <option value="ARC 121">ARC 121</option>
                                                      </optgroup>
                                                      <optgroup label="DAF">
                                                        <option value="ACT 201">ACT 201</option>
                                                        <option value="ACT 202">ACT 202</option>
                                                        <option value="FIN 254">FIN 254</option>
                                                        <option value="ACT 322">ACT 322</option>

                                                     </select>
                                                 </div>

                                         </div>


                   <input class="submit-button" type="submit" name="Submit" value="ADD">
                 </form>

                       <h4><i class="fa fa-trash" aria-hidden="true"></i> Delete a course</h4><BR>

                         <form class="text-center border border-light p-5" method="POST" action="DeleteCourse.php">


                                                                    <div class="form-row mb-4">
                                                                              <div class="col">
                                                                                <select name="name" class="browser-default custom-select">
                                                                                  <option selected>Delete a course</option>
                                                                                  <option value="CSE115">CSE115</option>
                                                                                  <option value="CSE173">CSE173</option>
                                                                                  <option value="CSE215">CSE215</option>
                                                                                  <option value="CSE225">CSE225</option>
                                                                                  <option value="CSE231">CSE231</option>
                                                                                  <option value="CSE257">CSE257</option>
                                                                                </select>
                                                                            </div>

                                                                    </div>






           <input class="submit-button" type="submit" name="Submit" value="DELETE">
         </form>




                             </div>
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
