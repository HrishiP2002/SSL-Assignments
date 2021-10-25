<!DOCTYPE html>
<html>
    <head>
        <title>Add Record Table 2</title>
    </head>

    <body>
        <h1>Add Record to Titles Table</h1>

        <p>Please enter the field values:  </p>

        <form action="Add2.php" method="GET">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title"><br>

        <label for="author">Author Name: </label>
        <input type="text" id="author" name="author"><br>

        <label for="year">Year: </label>
        <input type="number" id="year" name="year"><br>

        <button id="button">Submit</button>
        </form>

<?php
    echo "";
?>

    </body>
</html>



