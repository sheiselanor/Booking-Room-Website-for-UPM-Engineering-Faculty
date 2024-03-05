<!-- HAIFA AMMAR -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="styleammar.css"/>
</head>
<body>
<div class="container">
      <div class="topnav1">
        <a class="active" href="registeration.php">Registeration</a>
        <a  href="student_login.php">Login</a>
      </div>
    </div>
    <div class="container">
      <div class="topnav2">
        <a href="registeration.php">Student</a>
        <a class="active" href="registeration_staff.php">Staff</a>
        <a  href="registeration_admin.php">Admin</a>
        <a href="index.php">Homepage</a>
      </div>
    </div>
<div class="row">
      <div class="container">
        <div class="container">
          <h1 class="text-align-center">
          Registration Form for satff
          </h1>
          <div class="container">
              <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <div class="container">
                    <input type="text" name="staff_id" value="" placeholder="Staff ID" required><br>
                </div>
                <div class="container">
                    <input type="text" name="name" value="" placeholder="Name" required><br>
                </div>
                <div class="container">
                    <input type="text" name="email" value="" placeholder="Email" required><br>
                </div>
                <div class="container">
                    <input type="password" name="password" value="" placeholder="Password" required><br>
                </div>
                <button type="submit" name="submit">Submit</buttom>
            </form> 
        </div>
    </div>
    <div class="side"></div>
</div>
<footer class="footerlogin">
      <div class="copy-right_text">
          <div class="container">
              <div class="footer_border"></div>
              <p class="copy_right">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                All rights reserved | Faculty of Engineering | Universiti Putra Malaysia 
              </p>
          </div>
      </div>
    </footer>
</body>
</html>


 
<?php 
require_once("config.php");
if(isset($_POST['submit'])){
		$staff_id = $_POST['staff_id'];
		$name = $_POST['name'];
		$email 	= $_POST['email'];
		$password = $_POST['password'];
		
		$options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		$sql = "insert into staff (staff_id, name,email, password) value('".$staff_id."', '".$name."', '".$email."','".$hashPassword."')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			echo "Registration successfully";
		}
	}
?>