<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";
$Sr = $_GET['Sr'];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sql = "DELETE FROM titles WHERE Sr = ". $Sr;

if($conn->query($sql)==TRUE)
{
    echo "Record deleted succesfully";
}

?>