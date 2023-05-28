<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['submit'])) {
   $email = $_POST['email'];
   $booknum = $_POST['bookNum'];
   header("Location: view-application-detail2.php?booknum=$booknum&email=$email");
   exit();
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Hotel Reservation Management System | Home :: Page</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
      $(function() {
        $("#slider").responsiveSlides({
          auto: true,
          nav: true,
          speed: 500,
          namespace: "callbacks",
          pager: true,
        });
      });
    </script>
  </head>
  <body>
    <!--header-->
    <div class="header head-top">
      <div class="container">
        <?php include_once('includes/header.php');?>
      </div>
    </div>
    <!--header-->
    <!-- typography -->
    <div class="typography">
      <!-- container-wrap -->
      <div class="container">
        <div class="typography-info">
          <h2 class="type">Search a Booking</h2>
        </div>
        <div class="contact-grids">
          <div class="col-md-6 contact-right">
            <form method="post">
              <h5>Booking Number</h5>
              <input type="text" name="bookNum" required>
              <h5>Email</h5>
              <input type="text" name="email" required>
              <input type="submit" value="Send" name="submit">
            </form>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!-- //typography -->
    <?php include_once('includes/getintouch.php');?>
    <!--footer-->
    <?php include_once('includes/footer.php');?>
  </body>
</html>
