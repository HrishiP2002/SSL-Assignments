<!DOCTYPE html>

<html>
    <head>
        <title>Delete records from Author table</title>
    </head>
    <body>
        <h1>Delete a record from Authors Table</h1>
        <p>Please Enter the Num value of the record to be deleted : </p>

        <form action="DeleteT1.php" method="GET">
        <label for="num">Num: </label>
        <input type="text" id="num" name="num"><br>
        <button type="submit">Delete</button>

        </form>
        <?php
        echo "";
        ?>
    </body>
</html>