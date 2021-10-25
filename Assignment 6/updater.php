<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";
$yop = (int)$_GET['yop'];
$title = $_GET['title'];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

// $sql = "UPDATE titles SET year =  $yop , WHERE title =  $title";
if(gettype($yop)=='integer')
{
$sql = "UPDATE titles SET year = $yop  WHERE title LIKE '%$title%';";

if($conn->query($sql)===TRUE)
{
    echo "Record updated succesfully";
}
else{
    echo "Error updating the record :". $conn->error;
}

}

else{
    echo "incorrect data type";
}

?>