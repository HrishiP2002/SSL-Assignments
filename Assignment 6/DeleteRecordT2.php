<!DOCTYPE html>

<html>
    <head>
        <title>Delete records from Titles table</title>
    </head>
    <body>
        <h1>Delete a record from Titles Table</h1>
        <p>Please Enter the Sr value of the record to be deleted : </p>

        <form action="DeleteT2.php" method="GET">
        <label for="Sr">Sr: </label>
        <input type="text" id="Sr" name="Sr"><br>
        <button type="submit">Delete</button>

        </form>
        <?php
        echo "";
        ?>
    </body>
</html>