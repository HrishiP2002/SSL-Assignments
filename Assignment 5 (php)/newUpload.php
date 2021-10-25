<?php
session_start();
if($_SESSION['loggedin']!=true)
{

    echo 'You cannot access this page without logging into your account. <br> Please <a href="index.php">login</a>';
    exit();
}
?>


<html>
<head>
<title>PHP Photo Upload </title>
</head>
<body>

<form action="Upload.php" enctype="multipart/form-data" method="post">
<h1> Image Upload Page </h1>
Select image :<br/>
<input type="file" name="fileToUpload[]" id="fileToUpload[]" multiple/><br/>
<div>
<input type="submit" value="Upload" name="Submit1">Upload <br/>
</div>
</form>

<div>
<form action="Album.php"><br><button type=submit>Back</button></form>
</div>

<div>
    <h3>Image deletion</h3>
    <form action="delete.php" method="post">
        Please enter the name of the image to be deleted:<br>
        <input type="text" name="text" id="text"><br>
        <input type="submit" value = "Delete">Delete</button>
</form>
</body>
</html>


<!-- $filepath = "Images/" . $_FILES["file"]["name"];

move_uploaded_file($_FILES["file"]["tmp_name"], $filepath); -->

<!-- <?php
// if(isset($_POST['Submit1']))
// { 
    // fopen("newUpload.php" , "w");
// }
?> -->
