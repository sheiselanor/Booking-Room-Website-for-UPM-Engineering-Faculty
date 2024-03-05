<!-- TASNIM -->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking UPM</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bookstyle.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="contain no-gutters">
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
                            <li><a href="rooms.html">Lecture Room</a></li>
                            <li><a href="rooms.html">Lecture Hall</a></li>
                            <li><a href="rooms.html">Audotorium</a></li>
                            <li><a href="rooms.html">Thinker Space</a></li>
                          </ul>
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
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>

    <!-- forQuery_start -->
    <div class="forQuery">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="Query_border">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="Query_text">
                                    <p>Your booking have succefully been made!</p>
                                </div>
                                <br>
                                <div class="Query_text">
                                    <p>Thank you for your booking.</p>
                                </div>
                                <br>
                                <div class="Query_text">
                                    <p>Please contact us regarding any inqueries or cancellation.</p>
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
                  reservation@bookingengine.com
                </p>
              </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-2">
              <div class="footer_widget">
                <h3 class="footer_title">Navigation</h3>
                <ul>
                  <li><a href="landing.php">Home</a></li>
                  <li><a href="rooms.html">Rooms</a></li>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
