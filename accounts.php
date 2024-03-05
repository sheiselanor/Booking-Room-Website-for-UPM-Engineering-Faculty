<!-- AIDA -->

<?php
include("database.php");

$db= $conn;
$tableName="accounts";
$columns= ['accountID', 'typeID', 'registerID', 'loginID', 'bookingID'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
    
}