<!-- HAIFA AIN -->

<?php
session_start();
$_SESSION['roomType']= "Lecture Room";
$_SESSION['roomID']= "Room 1";
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Booking UPM</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,500;0,600;0,700;1,500&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- header-start -->
    <header>
      <div class="header-area">
        <div id="sticky-header" class="main-header-area">
          <div class="container-fluid p-0">
            <div class="row align-items-center no-gutters">
              <div class="col-xl-5 col-lg-6">
                <div
                  class="main-menu d-none d-lg-block justify-content-between"
                >
                  <nav>
                    <ul id="navigation">
                      <li><a class="active" href="landing.php">Home</a></li>
                      <li>
                        <a href="#"
                          >Rooms and Halls<i class="ti-angle-down"></i
                        ></a>
                        <ul class="submenu">
                          <li><a href="landing_rooms.php">Lecture Room</a></li>
                          <li><a href="landing_rooms.phpl">Lecture Hall</a></li>
                          <li><a href="landing_rooms.php">Audotorium</a></li>
                          <li><a href="landing_rooms.php">Thinker Space</a></li>
                        </ul>
                      </li>
                      <li>
                      <?php
                      if (!empty($_SESSION["name"])){
                    
                    // Echo session variables that were set on previous page
                    echo "<a href='logout.php'>Log Out</a>"; }
                    ?> 
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2">
                <div class="logo-img">
                  <a href="landing.php">
                    <img width="150px" src="img/upmlogo.png" />
                  </a>
                </div>
              </div>
              <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                <div class="book_room">
                  <div class="book_btn d-none d-lg-block">
                    <a class="popup-with-form" href="calender.php"
                      >Book A Room</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
      <div class="slider_active owl-carousel">
        <div
          class="single_slider d-flex align-items-center justify-content-center slider_bg_1"
        >
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="slider_text text-center">
                  <h3>
                    <?php
                      if (!empty($_SESSION["name"])){
                        // Echo session variables that were set on previous page
                        echo "<br>Welcome " . $_SESSION["name"] . "<br>"; 
                      }
                    ?> 
                  </h3>
                  <p>
                    <?php
                      if (!empty($_SESSION["name"])){
                        // Echo session variables that were set on previous page 
                        echo "<br>Matrix number:  " . $_SESSION["userID"] . "<br><br>"; 
                      }
                    ?> 
                  </p>
                  <p>Department of CCSE</p>
                  <p>Faculty of Engineering</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-5">
            <div class="about_info">
              <div class="section_title mb-20px">
                <span>About</span>
                <h3>
                  Rooms and Halls <br />
                  Booking
                </h3>
              </div>
              <p>
                Suscipit libero pretium nullam potenti. Interdum, blandit
                phasellus consectetuer dolor ornare dapibus enim ut tincidunt
                rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et.
                Rhoncus.
              </p>
              <a href="#" class="line-button">Learn More</a>
            </div>
          </div>
          <div class="col-xl-7 col-lg-7">
            <div class="about_thumb d-flex">
              <div class="img_1">
                <img src="img/about/about1.jpg" alt="" />
              </div>
              <div class="img_2">
                <img src="img/about/about2.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center mb-100">
              <span>Featured Rooms and Halls</span>
              <h3>Choose your Prefered Room or Hall</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="rooms_here">
        <div class="single_rooms">
          <div class="room_thumb">
            <img src="img/rooms/1.jpg" alt="" />
            <div
              class="room_heading d-flex justify-content-between align-items-center"
            >
              <div class="room_heading_inner">
                <span>Type 1</span>
                <h3>Lecture Room</h3>
              </div>
              <a href="calender.php" class="line-button">book now</a>
            </div>
          </div>
        </div>
        <div class="single_rooms">
          <div class="room_thumb">
            <img src="img/rooms/2.jpg" alt="" />
            <div
              class="room_heading d-flex justify-content-between align-items-center"
            >
              <div class="room_heading_inner">
                <span>Type 2</span>
                <h3>Lecture Hall</h3>
              </div>
              <a href="calender.php" class="line-button">book now</a>
            </div>
          </div>
        </div>
        <div class="single_rooms">
          <div class="room_thumb">
            <img src="img/rooms/3.jpg" alt="" />
            <div
              class="room_heading d-flex justify-content-between align-items-center"
            >
              <div class="room_heading_inner">
                <span>Type 4</span>
                <h3>Audotorium</h3>
              </div>
              <a href="calender.php" class="line-button">book now</a>
            </div>
          </div>
        </div>
        <div class="single_rooms">
          <div class="room_thumb">
            <img src="img/rooms/4.jpg" alt="" />
            <div
              class="room_heading d-flex justify-content-between align-items-center"
            >
              <div class="room_heading_inner">
                <span>Type 4</span>
                <h3>Thinker Space</h3>
              </div>
              <a href="calender.php" class="line-button">book now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- features_room_end -->

    <!-- forQuery_start -->
    <div class="forQuery">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 offset-xl-1 col-md-12">
            <div class="Query_border">
              <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-md-6">
                  <div class="Query_text">
                    <p>For Reservation 0r Query?</p>
                  </div>
                </div>
                <div class="col-xl-6 col-md-6">
                  <div class="phone_num">
                    <a href="#" class="mobile_no">+0312345678</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- forQuery_end-->

    <!-- instragram_area_start -->
    <div class="instragram_area">
      <div class="single_instagram">
        <img src="img/instragram/1.jpg" alt="" />
      </div>
      <div class="single_instagram">
        <img src="img/instragram/2.jpg" alt="" />
      </div>
      <div class="single_instagram">
        <img src="img/instragram/3.jpg" alt="" />
      </div>
      <div class="single_instagram">
        <img src="img/instragram/4.jpg" alt="" />
      </div>
      <div class="single_instagram">
        <img src="img/instragram/5.jpg" alt="" />
      </div>
    </div>
    <!-- instragram_area_end -->
    
        <!-- footer -->
    <footer class="footer">
      <div class="footer_top">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-3 col-md-6 col-lg-3">
              <div class="footer_widget">
                <h3 class="footer_title">Address</h3>
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
                <a href="calender.php" class="book_btn line-button">BOOK A ROOM</a>
              </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-2">
              <div class="footer_widget">
                <h3 class="footer_title">Navigation</h3>
                <ul>
                  <li><a href="landing.php">Home</a></li>
                  <li><a href="landing_rooms.php">Rooms</a></li>
                  <li><a href="logout.php">Logout</a></li>
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
