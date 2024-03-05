<!-- AIDA -->

<?php 

  include_once('database.php');
  $query = "select * from bookinginfo";
  $result = mysqli_query($conn, $query);
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Lab Room</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin_landing.php">Home</a></li>
          <li class="breadcrumb-item">Menu</li>
          <li class="breadcrumb-item active">Lab Room</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<div class="card">
    
 
      <div class="card-body">
      <table align="center" class="table table-responsive table-bordered">
      <p align="center">
        <thead>
          <tr align="center">
            
              <th scope="col">Booking ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Year of Study</th>
              <th scope="col">Mobile Number</th>
              <th scope="col">Person in Charge</th>
              <th scope="col">Login ID</th>
              <th scope="col">Register ID</th>
              <th scope="col">Room Type</th>
              <th scope="col">Room</th>
              <th scope="col">Booking Date</th>
              <th scope="col">Booking Time</th>
              <th scope="col">Extra Facilities</th>
            

            
          </tr>
        </thead>
        <tbody>
          <?php

          $sql = "SELECT * FROM bookinginfo WHERE roomType IN ('Lecture Hall')";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row 
            while($rows=mysqli_fetch_array($result))
              {
            ?>
                <tr align = "center">
                    <td><?php echo $rows['bookingID']; ?></td>
                    <td><?php echo $rows['fullName']; ?></td>
                    <td><?php echo $rows['yearStudy']; ?></td>
                    <td><?php echo $rows['mobileNumber']; ?></td>
                    <td><?php echo $rows['personIC']; ?></td>
                    <td><?php echo $rows['loginID']; ?></td>
                    <td><?php echo $rows['registerID']; ?></td>
                    <td><?php echo $rows['roomType']; ?></td>
                    <td><?php echo $rows['roomID']; ?></td>
                    <td><?php echo $rows['bookingDate']; ?></td>
                    <td><?php echo $rows['bookingTime']; ?></td>
                    <td><?php echo $rows['roomFacilities']; ?></td>

                </tr>
          <?php
              } 
            }
              ?>
          </tbody>

      </table>
      </div>
    </div>
    </div>

    

  </div>


</main>