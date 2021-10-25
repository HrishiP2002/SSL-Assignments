
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";
$author = $_GET['author'];
$publisher = $_GET['publisher'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

if(is_string($author) && is_string($publisher))
{

$sql = "INSERT INTO authors(author, publisher)
        VALUES('$author','$publisher')";


    if($conn->query($sql)==TRUE)
    {
        echo "<br>Record added succesfully";
    }

    else
    {
        echo "<br>Error: ". $conn->error;
    }

}

 ?>

