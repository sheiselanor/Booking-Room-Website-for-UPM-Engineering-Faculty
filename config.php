<!-- AMMAR -->

<?php 

$conn = mysqli_connect("localhost","root","","room_booking");
 
if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>