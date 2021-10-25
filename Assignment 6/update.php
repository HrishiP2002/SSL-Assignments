<!DOCTYPE html>

<html>
    <head>
        <title>Update year of publication</title>
    </head>
    <body>
        <h1>Update year of publication</h1>
        <p>Please Enter the title and the revised year of publication : </p>

        <form action="updater.php" method="GET">

        <label for="title">Title: </label>
        <input type="text" id="title" name="title"><br>

        <label for="yop">Year of Publication: </label>
        <input type="number" id="yop" name="yop"><br>

        <button type="submit">Update</button>

        </form>
        <?php
        echo "";
        ?>
    </body>
</html>