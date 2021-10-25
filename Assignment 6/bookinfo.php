<!DOCTYPE html>

<html>
    <head>
        <title>Find book info</title>
    </head>
    <body>
        <h1>Find book Info</h1>
        <p>Please Enter the title of the book :</p>

        <form action="bookinfo1.php" method="GET">

        <label for="title">Title: </label>
        <input type="text" id="title" name="title"><br>

        <button type="submit">Find</button>

        </form>
        <?php
        echo "";
        ?>
    </body>
</html>