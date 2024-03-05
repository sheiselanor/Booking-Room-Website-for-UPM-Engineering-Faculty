<!-- AIDA -->

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, "room_booking");

if(isset($_POST['delete']))
{
    $registerID = $_POST['registerID'];

    $query = "DELETE FROM user WHERE registerID='$registerID' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted); </script>';
        header("location: admin_landing.php?page=menu-usermng");
    }
    else
    {
        echo '<script> alert("Data Not Deleted); </script>';
    }
}
?>