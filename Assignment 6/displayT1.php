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

$sql = "SELECT * FROM authors;";

$result = $conn->query($sql) ; 

if($result==FALSE)
    echo "Error displaying the table: " . $conn->error;

?>

<html>
    <head>
        <title>Authors Table</title>
    </head>

    <body>
        <h2>Authors table</h2>
        <?php
        $result = $conn->query("SELECT * FROM authors");
        echo "<table border=1>";

        if($result->num_rows>0)
        {

            echo   "<tr><td>". "Num"."</td><td>".  "Author  "."</td><td>"."Publisher</td></tr>"; 
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>" .$row['Num'] . "</td><td>" .$row['author'] . "</td><td>".  $row['publisher'] .  "</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "Table is empty!";
        }
?>        
    </body>
</html>