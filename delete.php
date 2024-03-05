<!-- AIDA -->

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, "room_booking");

if(isset($_POST['delete']))
{
    $bookingID = $_POST['bookingID'];

    $query = "DELETE FROM booking WHERE bookingID='$bookingID' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted); </script>';
        header("location: admin_landing.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted); </script>';
    }
}
?>