<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//Create the database publications....
$sql1 = "CREATE DATABASE publications";
if($conn->query($sql1)===TRUE)
{
    echo "Database created succesfully";
}

else
{
    echo "Error creating database: ". $conn->error;
}

$conn->close();

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sql2 = " CREATE TABLE authors(
    author VARCHAR(120) NOT NULL,
    publisher VARCHAR(30)
    )";

if($conn->query($sql2)==TRUE)
{
    echo "<br>Table authors created succesfully";
}

else
{
    echo "<br>Error creating table: " . $conn->error;
}

$sql3 = "INSERT INTO authors(author, publisher)
        VALUES('H.C Verma', 'Chand publications')";

        if($conn->query($sql3)===TRUE)
        {
            echo "<br>One record added.";
        }




$result = $conn->query("SELECT * FROM authors");

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc()) 
    {
        echo "<br>Author: " . $row['author'] . " Publication: ". $row['publisher'];
    }
}



$conn->close();

?>