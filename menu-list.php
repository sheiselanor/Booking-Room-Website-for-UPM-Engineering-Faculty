<!-- AIDA -->

<?php 

  include_once('database.php');
  $query = "select * from booking";
  $result = mysqli_query($conn, $query);
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Booking List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin_landing.php">Home</a></li>
          <li class="breadcrumb-item active">Menu</li>
          <li class="breadcrumb-item active">Booking List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class ="col-lg">

          
      <div class="card">
        <div class="card-body">
        <table align="center" class="table table-bordered">
        <p>
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
                <th scope="col">Action</th>

              
            </tr>
          </thead>
          <tbody>
            <?php
              while($rows=mysqli_fetch_assoc($result))
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
                  <td><a href="delete.php?id=<?php echo $data['bookingID']; ?>" class="btn btn-danger">Delete</a></td>

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
</main><!-- End #main -->

  