<?php

$user = $_GET['k1'];
$pass = $_GET['k2'];


$userErr = "Please Enter Your Username<br>";
$passErr = "Please Enter The Password<br>";


if($user=='')
{
    echo $userErr;
}

elseif($user=='eval')
{
    echo "Username Authenticated Succesfully........<br>";
}

else
{
    echo "Incorrect Username<br>";
}

if($pass=='')
{
    echo $passErr;
}

elseif($pass=='eva')
{
    echo "Password Authenticated Successfully.........<br>";
}

else
{
    echo "Incorrect Password<br>";
}


if($user == 'eval' && $pass == 'eva')
{
    session_start();
    $_SESSION['Username']=$user;
    $_SESSION['Password']=$pass;
    $_SESSION["loggedin"]=true;

    echo '<br> Please click this link to visit the album: <a href="album.php">Album</a> ';
    echo '<br> Please click this link to upload photos to the album: <a href="newUpload.php">Upload</a><br>';
    
}

echo '<form action="index.php"><br><button type=submit>Back</button></form>';

?>
