<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";
$publisher = $_GET['publisher'];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM titles INNER JOIN authors ON (authors.publisher LIKE '%$publisher%') AND (titles.author = authors.author) ;";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
     $space = "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
    echo "Title: ". $row['title'] .$space. "  Author:  ". $row['author'] .$space. "  Year of Publication: " . $row['year']."<br>";
    }

}
else{
    echo "No publisher info found. No books have been published by any author from this publisher.";
}

?>