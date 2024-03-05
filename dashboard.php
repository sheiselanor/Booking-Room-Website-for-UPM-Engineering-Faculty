<!-- AIDA -->

<?php 

  include_once('database.php');
  $query = "select * from booking";
  $result = mysqli_query($conn, $query);
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin_landing.php">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


<section class="section dashboard">
  <div class="row">

    
        <!-- Sales Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card sales-card">


            <div class="card-body">
              <h5 class="card-title">Room <span>|  Room type </span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-door-open"></i>
                </div>
                <div class="ps-3">
                  <h2>6</h2>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-6 col-md-6">
          <div class="card info-card revenue-card">

           

            <div class="card-body">
              <h5 class="card-title">New booking <span>| Daily</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-list-check"></i>
                </div>
                <div class="ps-3">
                  <?php

                    require 'count.php';

                    $query = "SELECT bookingID FROM booking ORDER BY bookingID";
                    $query_run = mysqli_query($connection, $query);

                    $row = mysqli_num_rows($query_run);

                    echo '<h2> '.$row.'</h2>';
                  
                  ?>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        </div>
    
</section>

<section class="section">
  <div class="row">
  <div class ="col-lg">
  <div class = "pagetitle">
    <h1>Booking List</h1>
  </div>          
    <div class="card">
    
 
      <div class="card-body">
      <table align="center" class="table table-bordered">
      <p align="center">
        <thead>
          <tr align="center">
            
              <th scope="col">Booking ID</th>
              <th scope="col">Register ID</th>
              <th scope="col">Login ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Year of Study</th>
              <th scope="col">Mobile Number</th>
              <th scope="col">Person in Charge</th>
              <th scope="col">Room Type</th>
              <th scope="col">Room</th>
              <th scope="col">Booking Date</th>
              <th scope="col">Booking Time</th>
              <th scope="col">Extra Facilities</th>
              <th scope="co">Action</th>

            
          </tr>
        </thead>
        <tbody>
          <?php
            while($rows=mysqli_fetch_array($result))
            {
          ?>    
              <tr align = "center">
                  <td><?php echo $rows['bookingID']; ?></td> 
                  <td><?php echo $rows['registerID']; ?></td>
                  <td><?php echo $rows['loginID']; ?></td>
                  <td><?php echo $rows['fullName']; ?></td>
                  <td><?php echo $rows['yearStudy']; ?></td>
                  <td><?php echo $rows['mobileNumber']; ?></td>
                  <td><?php echo $rows['personIC']; ?></td>
                  <td><?php echo $rows['roomType']; ?></td>
                  <td><?php echo $rows['roomID']; ?></td>
                  <td><?php echo $rows['bookingDate']; ?></td>
                  <td><?php echo $rows['bookingTime']; ?></td>
                  <td><?php echo $rows['roomFacilities']; ?></td>
                <form action="delete.php" method="post">
                  <input type="hidden" name="bookingID" value="<?php echo $rows['bookingID'] ?>">
                  <td> <input type="submit" name="delete" class="btn btn-danger" value="Delete"></td>
                </form>
              </tr>
          <?php    
            }
          
          ?>
          </tbody>

      </table>
      </div>
    </div>
    </div>

    

  </div>
</section>






</main>