<html>
    <head>
        <title>Books Database</title>
    </head>

    <body>
        <h1>Welcome to Books Database!</h1>
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

$sql2 = "CREATE TABLE authors(
    Num INT NOT NULL AUTO_INCREMENT, 
    author VARCHAR(120)   NULL,
    publisher VARCHAR(30)  NULL,
    PRIMARY KEY (Num)
    )";

if($conn->query($sql2)==TRUE)
{
    echo "<br>Table authors created succesfully";
}

else
{
    echo "<br>Error creating table: " . $conn->error;
}

$sql3 = "CREATE TABLE titles(
    Sr INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(120)  ,
    author VARCHAR(120),
    year SMALLINT(6),
    PRIMARY KEY (Sr))";
    

    if($conn->query($sql3))
    {
        echo "<br>Table publications created succesfully";
    }

else
{
    echo "<br>Error creating table: " . $conn->error;
}
?>

        <p>Please select an option to continue:</p>

        <div> <h3>Display section:</h3>
        <form action="displayT1.php">
            <button type = "submit">Display Authors Table</button>
        </form>
        <form action="displayT2.php">
            <button type = "submit">Display Titles Table</button>
        </form>
        </div>
        <div> <h3>Add section:</h3>
        <form action="AddRecordT1.php">
            <button type = "submit">Add a Record to Authors Table</button>
        </form>
        <form action="AddRecordT2.php">
            <button type = "submit">Add a Record to Titles Table</button>
        </form>
        </div>
        <div> <h3>Delete section:</h3>
        <form action="DeleteRecordT1.php">
            <button type="submit">Delete a record from Authors Table</button>
        </form>
        <form action="DeleteRecordT2.php">
            <button type="submit">Delete a record from Titles Table</button>
        </form>
        </div>
        <div><h3>Update section:</h3>
        <form action="update.php">
            <button type="submit">Update year of publication</button>
        </form>
        </div>
        <div> <h3>Search section:</h3>
        <form action="bookinfo.php">
            <button type="submit">Find author and Year of Publication of a book</button>
        </form>
        <form action="publisher.php">
            <button type="submit">Find Publisher Information</button>
        </form>
        </div>
    </body>
</html>