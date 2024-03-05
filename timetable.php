<!-- AMMAR -->

<?php
$conn = mysqli_connect("localhost","root","","room_booking");
$timeua=[];
if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
// $sql=time();
// TIME(bookingTime)
$sql = "SELECT * FROM booking 
WHERE roomType = '".$_SESSION["roomType"]."'
AND roomID = '".$_SESSION["roomID"]."'
AND bookingDate = '".$_SESSION["bookingDate"]."'";

$i=0;
    
$rs = mysqli_query($conn,$sql);
$numRows = mysqli_num_rows($rs);
while ($row = $rs->fetch_assoc()) {
    $timeua[]=$row['bookingTime'];
}
$arrLength = count($timeua);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Calendar</title>
</head>
<body>
    <p>Time table</p>
    <table>
        <tr>
            <td>time</td>
            <td>8:00</td>
            <td>9:00</td>
            <td>10:00</td>
            <td>11:00</td>
            <td>12:00</td>
            <td>13:00</td>
            <td>14:00</td>
            <td>15:00</td>
            <td>16:00</td>
            <td>17:00</td>
            <td>18:00</td>
        </tr>
        <tr>
            <td>availability</td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="08:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="09:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="10:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="11:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="12:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="13:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="14:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="15:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="16:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="17:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
            <td><?php
            $i=0;
            for($i=0; $arrLength>$i ;$i++){
                if($timeua[$i]=="18:00:00.000000"){
                    echo "<p> taken </p>";
                }
            }
            ?></td>
        </tr>
        
    </table>
</body>
</html>