<!-- HAIFA AMMAR -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Login</title>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="styleammar.css"/>

  </head>
  <body>
    <div class="container">
      <div class="topnav1">
        <a href="registeration.php">Registeration</a>
        <a class="active" href="student_login.php">Login</a>
      </div>
    </div>
    <div class="container">
      <div class="topnav2">
        <a href="student_login.php">Student</a>
        <a class="active" href="staff_login.php">Staff</a>
        <a  href="admin_login.php">Admin</a>
        <a href="index.php">Homepage</a>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="container">
          <h1 class="text-align-center">
            Staff Login
          </h1>
        </div>
        <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="container form-field has-validation">
              <h5 class="form-label" for="staff_id">Staff ID</h5>
              <input type="text" name="staff_id" value="" placeholder="Staff ID" required><br>
            </div>
            <div class="container form-field has-validation">
              <h5 class="form-label" for="password">Password</h5>
              <input type="password" name="password" value="" placeholder="Password" required><br>
              <br />
            </div>
            <button type="submit" name="submit">Login</button>
          </form>
        </div>
      </div>
      <div class="side"></div>
    </div>
    <footer class="footerlogin">
      <div class="copy-right_text">
          <div class="container">
              <div class="footer_border"></div>
              <p class="copy_right_text">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                All rights reserved  |  Faculty of Engineering  |  Universiti Putra Malaysia 
              </p>
          </div>
      </div>
    </footer>


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
      })();
    </script>
  </body>


  </footer>
</html>

<?php 
require_once("config.php");
if(isset($_POST['submit'])){
    $staff_id = trim($_POST['staff_id']);
	$password = trim($_POST['password']);
	
	$sql = "select * from staff where staff_id = '".$staff_id."'";
    
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
        $row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
            echo "Password verified";
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userID'] = $matrix_id;

            header("Location: landing.php");
		}
		else{
            echo "Wrong Password";
		}
	}
	else{
        echo "No User found";
	}
}
?>