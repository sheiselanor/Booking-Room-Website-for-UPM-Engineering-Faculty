<?php
      $host ="localhost";
  $dbUsername ="root";
  $dbPassword = "";
  $dbName = "room_booking";

  //create connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

  //check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // require_once("config.php");

  if(isset($_POST['submit'])) {
      $registerID = $_POST['registerID'];
      $fullName = $_POST['fullName'];
      $loginID = $_POST['loginID'];
      $yearStudy = $_POST['yearStudy'];
      $mobileNumber = $_POST['mobileNumber'];
      $personIC = $_POST['personIC'];
      $roomType = $_POST['roomType'];
      $roomID = $_POST['roomID'];
      $bookingDate = $_POST['bookingDate'];
      $bookingTime = $_POST['bookingTime'];
      $roomFacilities = implode(",", $_POST['roomFacilities']);

      //  To redirect form on a particular page
      header("Location: donebooking.php");
      
      $sql = "INSERT INTO booking (registerID, fullName, loginID, yearStudy, mobileNumber, personIC, roomType, roomID, bookingDate, bookingTime, roomFacilities)
      VALUES ('$registerID', '$fullName', '$loginID', '$yearStudy', '$mobileNumber', '$personIC', '$roomType', '$roomID', '$bookingDate', '$bookingTime', '$roomFacilities')";

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
  }
?>