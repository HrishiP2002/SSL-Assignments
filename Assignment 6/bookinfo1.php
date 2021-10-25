<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";
$title = $_GET['title'];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM titles WHERE title LIKE '%$title%';";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "Author: " . $row['author'] . " , Year of Publication: ". $row['year'] . " <br>";
    }
}
else{
    echo "Error finding the record";
}

?>