
<?php
// include('album.php');
session_start();
if($_SESSION['loggedin']!=true)
{

    echo 'You cannot access this page without logging into your account. <br> Please <a href="index.php">login</a>';
    exit();
}



$count =count(array_filter($_FILES["fileToUpload"]["name"]));
echo $count;

if($count ==0)
{
  echo "Please Upload some file!!";
  echo '<form action="newUpload.php"><br><button type=submit>Back</button></form>';
}

else
{

if($count>10)
{
  echo "Please upload 10 or less files at a time";
  echo '<form action="newUpload.php"><br><button type=submit>Back</button></form>';
}

else
{

  foreach($_FILES["fileToUpload"]["name"] as $key => $value)
  {
$Image_dir = "Images/";
$target_file = $Image_dir . "image". basename($value);
$upCheck = 1;
$imageFileType = strtolower(pathinfo($value,PATHINFO_EXTENSION));
// $_SESSION['length']++;



if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $upCheck = 0;
}


if ($_FILES["fileToUpload"]["size"][$key] > 204800) {
  echo "Sorry, your file is too large.";
  $upCheck = 0;
}


if($imageFileType != "jpg" ) {
  echo "Sorry, only JPG files are allowed.";
  $upCheck = 0;
}

// if ($upCheck == 1)
// {
//   $file = fopen("Images/image".$len.".jpg", "w");
//   fclose($file);

// }

$_SESSION['length']++;
$target_file = $Image_dir . "image".$_SESSION['length'].".jpg";

if ($upCheck == 0)
     {
        echo "Sorry, your file was not uploaded.";
        echo '<form action="newUpload.php"><br><button type=submit>Back</button></form>';

    }

    // $GLOBALS['len']++;
//     $file_location = $Image_dir . "image" . $GLOBALS['x'];


// }
else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"][$key]). " has been uploaded.";
    echo '<form action="newUpload.php"><br><button type=submit>Back</button></form>';
    $_SESSION['ImageArray'][$_SESSION['length']] = $target_file;
    // $_SESSION['length']++;
    //echo $_SESSION['length'];

  } else {
    echo "Sorry, there was an error uploading your file.";
    echo '<form action="newUpload.php"><br><button type=submit>Back</button></form>';
   
  }
}
}

}

}



?>