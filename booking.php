<!-- AMMAR -->

<?php
 echo "<h2><br>Room  " . $_SESSION["roomType"] . " " . $_SESSION["roomID"] . ".<br></h2>";
class Booking
{
 
    private $dbh;
 
    private $bookingsTableName = 'bookingdetails';
 
    /**
     * Booking constructor.
     * @param string $database
     * @param string $host
     * @param string $databaseUsername
     * @param string $databaseUserPassword
     */
    public function __construct($database, $host, $databaseUsername, $databaseUserPassword)
    {
        try {
 
            $this->dbh =
                new PDO(sprintf('mysql:host=%s;dbname=%s', $host, $database),
                    $databaseUsername,
                    $databaseUserPassword
                );
 
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
//  where roomID = '".$roomID."'
    public function index()
    {
        $statement = $this->dbh->query("select * from booking where roomType = '".$_SESSION["roomType"]."'
        AND roomID = '".$_SESSION["roomID"]."'" );
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
 
    public function add(DateTimeImmutable $bookingDATE)
    {
        $_SESSION["bookingDate"]=$bookingDATE->format('Y-m-d');
        header("Location: bookingroom.php");
        // $statement = $this->dbh->prepare(
        //     'INSERT INTO ' . $this->bookingsTableName . ' (bookingDate) VALUES (:bookingDATE)'
        // );
 
        // if (false === $statement) {
        //     throw new Exception('Invalid prepare statement');
        // }
 
        // if (false === $statement->execute([
        //         ':bookingDATE' => $bookingDATE->format('Y-m-d'),
        //     ])) {
        //     throw new Exception(implode(' ', $statement->errorInfo()));
        // }
    }
 
    public function delete(DateTimeImmutable $bookingDATE)
    {
        $_SESSION["bookingDate"]=$bookingDATE->format('Y-m-d');
        header("Location: bookingroom.php");
        // $statement = $this->dbh->prepare(
        //     'DELETE from ' . $this->bookingsTableName . ' WHERE bookingID = :bookingID'
        // );
        // if (false === $statement) {
        //     throw new Exception('Invalid prepare statement');
        // }
        // if (false === $statement->execute([':bookingID' => $bookingID])) {
        //     throw new Exception(implode(' ', $statement->errorInfo()));
        // }
    }
 
}