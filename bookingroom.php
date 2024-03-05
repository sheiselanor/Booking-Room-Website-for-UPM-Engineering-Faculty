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

    <!-- Modal -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <script>
      function random_function() {
        var a = document.getElementById("input").value;
        if (a === "Lecture Room") {
          var arr = ["Room1", "Room2", "Room3"];
        } else if (a === "Lecture Hall") {
          var arr = [
            "DK1",
            "DK2",
            "DK3",
            "DK4",
            "DK4",
            "DK5",
            "DK6",
            "DK7",
            "DK8"
          ];
        } else if (a === "Auditorium") {
          var arr = ["Faculty_Auditorium"]
        } else if (a === "Thinker Space") {
          var arr = ["Faculty_Thinker_Space"]
        }

        var string = "";

        for (i = 0; i < arr.length; i++) {
          string =
            string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
        }
        document.getElementById("output").innerHTML = string;
      }
    </script>
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

    <div class="container">
      <div class="container-form">
        <h1>Room Booking Form</h1>
        <form action="redirectform.php" method="POST" class="needs-validation">
          <div class="form-field has-validation">
            <p class="form-label ptextbooking" for="registerID">
              Matric/Staff ID:
            </p>
            <input
              class="form-control"
              type="text"
              id="registerID"
              name="registerID"
              placeholder="Your matric number"
              value= "<?php echo $_SESSION["userID"]; ?>"
              required
            >
            <div class="invalid-feedback">Please choose a username.</div>
          </div>

          <div class="form-field has-validation">
            <p class="form-label ptextbooking" for="fullName">Name:</p>
            <input
              class="form-control"
              type="text"
              id="fullName"
              name="fullName"
              placeholder="Your full name"
              value= "<?php echo $_SESSION["name"]; ?>"
              required
            >
          </div>

          <div class="form-field has-validation">
            <p class="form-label ptextbooking" for="loginID">UPM Email:</p>
            <input
              class="form-control"
              type="email"
              id="loginID"
              name="loginID"
              placeholder="Your upm email"
              value= "<?php echo $_SESSION["email"]; ?>"
              required
            >
          </div>

          <div class="form-field-select has-validation">
            <p class="form-label ptextbooking" for="yearStudy">
              Year of Study:
            </p>
            <select
              id="yearStudy"
              class="form-control selectinput"
              name="yearStudy"
              required
            >
              <option>select option</option>
              <option id="year1">1st Year</option>
              <option id="year2">2nd Year</option>
              <option id="year3">3rd Year</option>
              <option id="year4">4th Year</option>
              <option id="yearM">Master</option>
              <option id="yearP">PhD</option>
              <option id="yearP">Staff</option>
            </select>
          </div>

          <div class="form-field has-validation">
            <p class="form-label ptextbooking" for="mobileNumber">
              Mobile Number:
            </p>
            <input
              class="form-control"
              type="text"
              id="mobileNumber"
              name="mobileNumber"
              placeholder="+60X-XXX XXXX"
              required
            >
          </div>

          <div class="form-field has-validation">
            <p class="form-label ptextbooking" for="personIC">
              Person in Charge:
            </p>
            <input
              class="form-control"
              type="text"
              id="personIC"
              name="personIC"
              placeholder="Person in charge"
              required
            >
          </div>

          <h2><b>Booking information</b></h2>

          <div class="form-field-select has-validation">
            <p class="form-label ptextbooking" for="roomType">Room Type:</p>
            <input type="text" id="roomType" name="roomType" class="form-control" value= "<?php echo $_SESSION["roomType"]; ?>" required  />
          
            <!-- <select
              class="form-control"
              id="input"
              name="roomType"
              class="selectinput"
              onchange="random_function()"
              value= "<?php //echo $_SESSION["roomType"]; ?>"
              required
            >
              <option>select option</option>
              <option id="Lecture Room">Lecture Room</option>
              <option id="Lecture Hall">Lecture Hall</option>
              <option id="Audotorium">Auditorium</option>
              <option id="Thinker Space">Thinker Space</option>
            </select> -->
            
          </div>
          <div class="form-field-select has-validation">
            <p class="form-label ptextbooking" for="roomID">Room:</p>
            <input type="text" id="roomID" name="roomID" class="form-control" value= "<?php echo $_SESSION["roomID"]; ?>" required  />
            
            <!-- <select 
            class="form-control" 
            id="output"
            name="roomID" 
            class="selectinput"
            value= "<?php //echo $_SESSION["roomID"]; ?>"
            onchange="random_function1()" 
            ></select> -->
          </div>

          <div class="form-field has-validation">
            <p class="form-label ptextbooking" for="bookingDate">Date:</p>
            <input type="date" id="bookingDate" name="bookingDate" class="form-control" value= "<?php echo $_SESSION["bookingDate"]; ?>" required>
          </div>

          <div class="table">
            <?php
            include 'timetable.php';
            ?>
          </div>

          <div class="form-field has-validation">
            <p class="forml-label ptextbooking" for="bookingTime">Time:</p>
            <input type="time" id="bookingTime" name="bookingTime" class="form-control" required>
          </div>

          <div class="form-field-select has-validation">
            <p class="form-label ptextbooking" for="roomFacilities">Extra Facilities:</p>
            <div class="form-check form-check-inline">
                <input class="form-control form-check-input" type="checkbox" name="roomFacilities[]" value="None" id="facility1" />
                <label class="form-check-label" for="facility1">None</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-control form-check-input" type="checkbox" name="roomFacilities[]" value="Chairs" id="facility2" />
                <label class="form-check-label" for="facility2">Chairs</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-control form-check-input" type="checkbox" name="roomFacilities[]" value="Tables" id="facility3" />
                <label class="form-check-label" for="facility3">Tables</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-control form-check-input" type="checkbox" name="roomFacilities[]" value="Soundsystem/Mic" id="facility4" />
                <label class="form-check-label" for="facility4">Soundsystem/Mic</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-control form-check-input" type="checkbox" name="roomFacilities[]" value="Projector" id="facility5" />
                <label class="form-check-label" for="facility5">Projector</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-control form-check-input" type="checkbox" name="roomFacilities[]" value="Monitor" id="facility6" />
                <label class="form-check-label" for="facility6">Monitor</label>
            </div>
          </div>

          <div class="buttondiv">
            <button type="submit" name="submit" class="btn text-center">Submit</button>
          </div>
        </form>
      </div>
    </div>

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
    <script>
      (function () {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }

              form.classList.add("was-validated");
            },
            false
          );
        });
        
      })
    </script>
  </body>
</html>

<?php
  include "redirectform.php";
?>
