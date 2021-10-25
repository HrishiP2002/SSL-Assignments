<!DOCTYPE html>

<html>
    <head>
        <title>Find Publisher info</title>
    </head>
    <body>
        <h1>Find Publisher Info</h1>
        <p>Please Enter the name of the Publisher :</p>

        <form action="publisherInfojoin.php" method="GET">

        <label for="publisher">Publisher : </label>
        <input type="text" id="publisher" name="publisher"><br>

        <button type="submit">Find</button>

        </form>
        <?php
        echo "";
        ?>
    </body>
</html>