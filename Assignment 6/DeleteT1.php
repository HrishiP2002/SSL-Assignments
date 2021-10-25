<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";
$num = $_GET['num'];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sql = "DELETE FROM authors WHERE Num = ". $num;

if($conn->query($sql)==TRUE)
{
    echo "Record deleted succesfully";
}

?>