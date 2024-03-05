<!-- AIDA -->

<?php 

  include_once('database.php');
  $query = "select * from user";
  $result = mysqli_query($conn, $query);
?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User Management</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin_landing.php">Home</a></li>
          <li class="breadcrumb-item">Menu</li>
          <li class="breadcrumb-item active">User Management</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


<section class="section">
      <div class="row">
        <div class ="col-lg">

          
      <div class="card">
        <div class="card-body">
        <table align="center" class="table table-bordered">
        <p align="center">
          <thead>
            <tr align="center">
              
                <th scope="col">Register ID</th>
                <th scope="col">Type ID</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Login ID</th>
                <th scope="co">Action</th>

              
            </tr>
          </thead>
          <tbody>
            <?php
              while($rows=mysqli_fetch_assoc($result))
              {
            ?>    
                <tr align = "center">
                  <td><?php echo $rows['registerID']; ?></td>
                  <td><?php echo $rows['typeID']; ?></td>
                  <td><?php echo $rows['userName']; ?></td>
                  <td><?php echo $rows['userPass']; ?></td>
                  <td><?php echo $rows['mobileNumber']; ?></td>
                  <td><?php echo $rows['loginID']; ?></td>
                  <form action="delete1.php" method="post">
                      <input type="hidden" name="registerID" value="<?php echo $rows['registerID'] ?>">
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
</main><!-- End #main -->