<?php
 session_start();
//  require_once("config.php");
?>

<html>
<head>
    <link rel="stylesheet" href="Calendar.css" />

    <style>
        /* h2 {
            text-align: center;
            color: blue;
        } */
        /* .container {
            text-align: center;
        } */
        body{
            /* background-image: url('img/cldbckgimg.jpg'); */
            background: rgb(245, 246, 255);
        }
    </style>
</head>
<body>
  
<?php
echo '<div class="contain no-gutters">
    <div class="header-area">
          <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
              <div class="row align-items-center no-gutters">
                <div class="col-xl-2 col-lg-2">
                  <div class="logo-img">
                    <a href="landing.php">
                      <img class="justify-content-center" width="150px" src="img/upmlogo.png" />
                    </a>               
                  </div>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>';
include 'which_room.php';
include 'calendar.php';
include 'booking.php';
include 'BookingCell.php';
 
 
$booking = new booking(
    'room_booking',
    'localhost',
    'root',
    ''
);
 
$bookableCell = new BookableCell($booking);
 
$calendar = new Calendar();
 
$calendar->attachObserver('showCell', $bookableCell);
 
$bookableCell->routeActions();
 
echo $calendar->show();
?>

    <!-- footer -->
    <footer class="footer">
      <div class="footer_top">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-3 col-md-6 col-lg-3">
              <div class="footer_widget">
                <h3 class="footer_title">address</h3>
                <p class="footer_text">
                  Faculty of Engineering <br />
                  Universiti Putra Malaysia <br />Jalan Universiti 1<br />
                  43400 Serdang, Selangor
                </p>
                <a href="#" class="line-button">Get Direction</a>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-3">
              <div class="footer_widget">
                <h3 class="footer_title">Reservation</h3>
                <p class="footer_text">
                  +0312345678<br />
                  reservation@ccsebooking.com
                </p>
              </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-2">
              <div class="footer_widget">
                <h3 class="footer_title">Navigation</h3>
                <ul>
                  <li><a href="landing.php">Home</a></li>
                  <li><a href="room.php">Rooms</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copy-right_text">
        <div class="container">
          <div class="footer_border"></div>
          <div class="row">
            <div class="col-xl-8 col-md-7 col-lg-9">
              <p class="copy_right">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | Faculty of Engineering | Universiti Putra
                Malaysia
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

</body>
</html>