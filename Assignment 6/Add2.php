<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";
$title = $_GET['title'];
$author= $_GET['author'];
$year = (int)$_GET['year'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

if(gettype($title)=='string' && gettype($author)=='string' && gettype($year)=='integer')
{
$sql = "INSERT INTO titles(title, author, year)
        VALUES('$title','$author','$year')";


    if($conn->query($sql)==TRUE)
    {
        echo "<br>Record added succesfully";
    }

    else
    {
        echo "<br>Error: ". $conn->error;
    }

}

else{
    echo "Incorrect datatype";
}


?>