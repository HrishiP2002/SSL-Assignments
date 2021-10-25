<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "publications";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM titles;";

$result = $conn->query($sql) ; 

if($result==FALSE)
    echo "Error displaying the table: " . $conn->error;

?>

<html>
    <head>
        <title>Titles Table</title>
    </head>

    <body>
        <h2>Titles table</h2>
        <?php
        $result = $conn->query("SELECT * FROM titles");
        echo "<table border=1>";

        if($result->num_rows>0)
        {

            echo  "<tr><td>". "Sr"."</td><td>" ."Title"."</td><td>". "Author"."</td><td>"."Year". "</td></tr>"; 
            while($row = $result->fetch_assoc()) 
            {
                echo  "<tr><td>". $row['Sr'] ."</td><td>" .$row['title'] . "</td><td>".  $row['author'] ."</td><td>". $row['year'] . "</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "Table is empty!";
        }

?>