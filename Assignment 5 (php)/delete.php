<?php
$link = $_POST["text"];

    $location = "Images/".$link;
    if(file_exists($location)){
        unlink($location);
        echo "<h2>File $link is deleted</h2> <br>";
    }
    else{
        echo "<h2>File $link does not exist</h2> <br>";
    }

    echo '<form action="newUpload.php"><br><button type=submit>Back</button></form>';

?>