<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact | NSU-TS</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Marcellus+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Coustard&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                      <a href="#"><img src="images/logo.png">North South University Tuition Services</a>
                    </div>
                  </div>
                </div>
              </div>
    <div class="col-md-12 nopadding">
      <div class="header">
          <div class="col-md-12 left nopadding">
            <div class="header-left">
              <ul>

                  <li style="background-color: #60151A;"><a href="Contact.php"><i class="fa fa-phone"aria-hidden="true"></i> Contact us</a></li>


              </ul>
           </div>
          </div>


      </div>
    </div>
    <div class="bg">

<!--Section: Contact v.1-->
<section class="section pb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!--Section heading-->
        <h5 class="section-heading h1 pt-4" style="font-family: 'Marcellus SC', serif;"><i class="fa fa-phone"aria-hidden="true"></i> Contact NSU-TS</h5><BR><BR>
        <!--Section description-->

      </div>
    </div>

    <div class="row">
    <!--Grid column-->
    <div class="col-md -4">
      <!--Form with header-->
      <div class="card">
        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fa fa-envelope"> </i>SEND E-MAIL TO US</h3>
          </div>

          <!-- FORM Body-->
          <form id="contact-form" method="post" action="contactform.php">
            <div class="md-form">
              <i class="fa fa-user prefix grey-text"></i><label for="form-name">Your name</label>
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="md-form">
              <i class="fa fa-envelope prefix grey-text"></i><label for="form-email">Your email</label>
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>

            <div class="md-form">
              <i class="fa fa-tag prefix grey-text"></i><label for="form-Subject">Subject</label>
              <input type="text" name="subject" class="form-control" placeholder="Your Subject" required>
            </div>

            <div class="md-form">
              <i class="fa fa-superpowers" aria-hidden="true"></i><label for="form-text">Message</label>
              <textarea name="message" class="form-control" placeholder="Your message" rows="4" required></textarea>
            </div>

            <div class="text-center mt-4">
              <button class="btn btn-dark-green my-4 btn-block" data-toggle="modal" type="submit" href="#ignismyModal"><i class="fa fa-send" aria-hidden="true"></i> Send Message</button>
              <div class="modal fade" id="ignismyModal" role="dialog">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                           </div>

                          <div class="modal-body">

                  <div class="thank-you-pop">
                    <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                    <h1>Message Sent!</h1>
                    <p>Your submission is received and we will contact you soon</p>


                  </div>

                          </div>

                      </div>
                  </div>
              </div>
            </div>



<!--Model Popup starts-->


          </form>

        </div>

      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-8">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0983083934066!2d90.42334931457238!3d23.815102984557562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sbd!4v1575709466078!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-university" aria-hidden="true"></i></a>
          <p>North South University</p>
          <p>Bangladesh</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-phone"></i></a>
          <p><a href="tel:+880">+8801717272999 </a></p>
          <p>Mon - Fri, 8:00-22:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-envelope"></i></a>
          <p><a href="mailto:info@nsu-ts.com">info@nsu-ts.com</a></p>
        </div>
      </div>
    </div>
  </div>


  </div>


</section>
<script type="text/javascript">
  function con_validate(){
  var a= document.forms["conform"]["name"].value;
  var b= document.forms["conform"]["email"].value;
  var c= document.forms["conform"]["subject"].value;
  var d= document.forms["conform"]["message"].value;


  if(a== ""){
    window.alert("You must enter EMAIL");
  }
  if(b== ""){
    window.alert("You must enter EMAIL");
  }
  if(c== ""){
    window.alert("You must enter EMAIL");
  }
  if(d== ""){
    window.alert("You must enter EMAIL");
  }

}
</script>
</div>
<!--Section: Contact v.1-->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
