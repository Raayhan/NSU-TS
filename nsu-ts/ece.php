<?php
if(!isset($_SESSION))
    {
        session_start();
    }

  require_once 'connect.php';

  if(!isset($_SESSION['student']))
  {
      // not logged in
      header('Location: index.php');
      exit();
  }
  $fname;
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


    <title>ECE | NSU-TS</title>
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
                    <li style="background-color: #60151A;"><a href="StudentDashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="StudentProfile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</a></li>

                  </ul>
               </div>
              </div>
              <div class="col-md-1 left nopadding">
                <div class="header-right">
                  <div class="dropdown">
                    <button class="dropbtn"><i class="fa fa-power-off" aria-hidden="true"></i> SIGN OUT</button>
                    <div class="dropdown-content">
                      <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>  Settings</a>
                      <a href="StudentSignout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
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
            <h4>Tuition Service for - Department of Electrical & Computer Engineering</h4>
            <p>Please select your desired Course from the catagories</p>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-content">
              <h2 class="my-box-title">CSE115</h2>
              <p class="my-box-text">Programming Language I</p>
              <button type="button" class="box-button" data-toggle="modal" data-target="#115">
                Select
            </button>
           </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-content">
              <h2 class="my-box-title">CSE173</h2>
              <p class="my-box-text">Discrete Mathematics</p>
              <button type="button" class="box-button" data-toggle="modal" data-target="#173">
                Select
            </button>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-content">
              <h2 class="my-box-title">CSE215</h2>
              <p class="my-box-text">Programming Language II</p>
              <button type="button" class="box-button" data-toggle="modal" data-target="#215">
                Select
            </button>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-content">
              <h2 class="my-box-title">CSE225</h2>
              <p class="my-box-text">Data Structure & Algorithms</p>
              <button type="button" class="box-button" data-toggle="modal" data-target="#225">
                Select
            </button>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-content">
              <h2 class="my-box-title">CSE231</h2>
              <p class="my-box-text">Digital Logic Design</p>
              <button type="button" class="box-button" data-toggle="modal" data-target="#231">
                Select
            </button>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-content">
              <h2 class="my-box-title">CSE311</h2>
              <p class="my-box-text">Database Systems</p>
              <button type="button" class="box-button" data-toggle="modal" data-target="#311">
                Select
            </button>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-content">
              <h2 class="my-box-title">CSE323</h2>
              <p class="my-box-text">Operating Systems Design</p>
              <button type="button" class="box-button" data-toggle="modal" data-target="#323">
                Select
            </button>
           </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="my-box-option">
            <div class="my-box-content">
              <h2 class="my-box-title">CSE327</h2>
              <p class="my-box-text">Software Engineering</p>
              <button type="button" class="box-button" data-toggle="modal" data-target="#327">
                Select
            </button>
            </div>
          </div>
        </div>
          <div class="col-md-3">
            <div class="my-box-option">
              <div class="my-box-content">
                <h2 class="my-box-title">CSE331</h2>
                <p class="my-box-text"> Microprocessor Interfacing & Embedded Sys.</p>
                <button type="button" class="box-button" data-toggle="modal" data-target="#331">
                  Select
              </button>

              </div>
             </div>
          </div>

          <div class="col-md-3">
            <div class="my-box-option">
              <div class="my-box-content">
                <h2 class="my-box-title">CSE373</h2>
                <p class="my-box-text">Design and Analysis of Algorithms</p>
                <button type="button" class="box-button" data-toggle="modal" data-target="#373">
                  Select
              </button>
             </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="my-box-option">
              <div class="my-box-content">
                <h2 class="my-box-title">CSE332</h2>
                <p class="my-box-text">Computer Organization and Architecture</p>
                <button type="button" class="box-button" data-toggle="modal" data-target="#332">
                  Select
              </button>
             </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="my-box-option">
              <div class="my-box-content">
                <h2 class="my-box-title">CSE425</h2>
                <p class="my-box-text">Concepts of Programming language </p>
                <button type="button" class="box-button" data-toggle="modal" data-target="#425">
                  Select
              </button>
             </div>
            </div>
          </div>
        </div>






        <!-- Modal -->

    </div>

    <div class="modal fade" id="115" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="font-family: 'Coustard', serif;" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">CSE115</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php
                  $sql = "SELECT * FROM courses WHERE name = 'CSE 115'";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {

                  echo " Teacher Name: ". $row["first_name"]." ".$row["last_name"]."<BR>"."Email : ".$row["email"]."<BR>"."Contact No. : ".$row["phone"]."<br>";
                  echo"<BR><BR>";
                  }
                  } else {
                  echo "No Teacher Available";
                  }
                  ?></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="173" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="font-family: 'Coustard', serif;" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CSE173</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
                $sql = "SELECT * FROM courses WHERE name = 'CSE 173'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                echo " Teacher Name: ". $row["first_name"]." ".$row["last_name"]."<BR>"."Email : ".$row["email"]."<BR>"."Contact No. : ".$row["phone"]."<br>";
                echo"<BR><BR>";
                }
                } else {
                echo "No Teacher Available";
                }
                ?></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="215" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content" style="font-family: 'Coustard', serif;" >
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">CSE215</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <?php
              $sql = "SELECT * FROM courses WHERE name = 'CSE 215'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

              echo " Teacher Name: ". $row["first_name"]." ".$row["last_name"]."<BR>"."Email : ".$row["email"]."<BR>"."Contact No. : ".$row["phone"]."<br>";
              echo"<BR><BR>";
              }
              } else {
              echo "No Teacher Available";
              }
              ?></p>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

    </div>
  </div>
</div>
</div>



<div class="modal fade" id="225" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content" style="font-family: 'Coustard', serif;" >
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">CSE225</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <?php
              $sql = "SELECT * FROM courses WHERE name = 'CSE 225'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

              echo " Teacher Name: ". $row["first_name"]." ".$row["last_name"]."<BR>"."Email : ".$row["email"]."<BR>"."Contact No. : ".$row["phone"]."<br>";
              echo"<BR><BR>";
              }
              } else {
              echo "No Teacher Available";
              }
              ?></p>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

    </div>
  </div>
</div>
</div>


<div class="modal fade" id="231" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content" style="font-family: 'Coustard', serif;" >
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">CSE231</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <?php
              $sql = "SELECT * FROM courses WHERE name = 'CSE 231'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

              echo " Teacher Name: ". $row["first_name"]." ".$row["last_name"]."<BR>"."Email : ".$row["email"]."<BR>"."Contact No. : ".$row["phone"]."<br>";
              echo"<BR><BR>";
              }
              } else {
              echo "No Teacher Available";
              }
              ?></p>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

    </div>
  </div>
</div>
</div>

<div class="modal fade" id="311" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content" style="font-family: 'Coustard', serif;" >
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">CSE311</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <?php
              $sql = "SELECT * FROM courses WHERE name = 'CSE 311'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

              echo " Teacher Name: ". $row["first_name"]." ".$row["last_name"]."<BR>"."Email : ".$row["email"]."<BR>"."Contact No. : ".$row["phone"]."<br>";
              echo"<BR><BR>";
              }
              } else {
              echo "No Teacher Available";
              }
              ?></p>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

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
