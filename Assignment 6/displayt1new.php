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
    <Table id="myTable" align="center">
           
           </Table>

           <script type="text/javascript">
        


       


        function Display()
        {
            var name ,address, number, emailId, e_qual, age;

            const Record = {
                Author : author,
                Publisher : publisher
           
             }

        // User.Name = document.getElementById("name").value;
        // User.Address = document.getElementById("address").value;
        // User.Number = document.getElementById("number").value;
        // User.EmailId = document.getElementById("email").value;
        // User.e_qual = document.getElementById("qual").value;
        // User.Age = document.getElementById("age").value;



            // CreateRow(1, "User.Name", User.Name);
            // CreateRow(2, "User.Address", User.Address);
            // CreateRow(3, "User.Phone Number", User.Number);
            // CreateRow(4, "User.EmailID", User.EmailId);
            // CreateRow(5, "User.Educational Qualifications", User.e_qual);
            // CreateRow(6, "User.Age", User.Age);

            <?php
                    if($result->num_rows>0)
                    {
                        echo "Author    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Publisher<br>"; 
                        while($row = $result->fetch_assoc()) 
                        {
                            echo  $row['author'] . " &nbsp   ". $row['publisher'] . "<br>";
                        }
                    }
            ?>

            document.getElementById("button").disabled =true;

 
        }


                function  CreateRow(n, x, y)
                {
                    var table = document.getElementById("myTable");
                    var row = table.insertRow(-1);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    cell1.innerHTML = x;
                    cell2.innerHTML = y;

                    if(n%2==1)
                    {
                        cell1.style.backgroundColor = "#aaaaaa";
                        cell2.style.backgroundColor = "#aaaaaa";
                    }

                    if(n%2==0)
                    {
                        cell1.style.backgroundColor = "#d3d3d3";
                        cell2.style.backgroundColor = "#d3d3d3";
                    }
                  
                }

                
            
        </script>



    </body>
</html>