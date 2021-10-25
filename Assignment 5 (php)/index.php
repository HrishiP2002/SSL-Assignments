<DOCTYPE html>

<html>
    <head>
        <title>Photo Album</title>
        <style>
            .error { color: red}
        </style>
    </head>
    <body>
        <?php

        $user ="";
        $pass ="";
        ?>


            <h1>Login Form</h1>
            <p>Please enter your username and password: </p>

            <p><span class="error">* required field</span></p>

            <form method= "GET" action="login.php" >
            <table>
            <tr><td>ID: </td><td> <input type="text" name = "k1" /><span class="error">*</span></td> </tr>

            <tr><td>Password: </td><td> <input type="password" name = "k2" /><span class="error">*</span> </td> </tr>

            <tr><td colspan="2"><input type="submit" value ="login"/> </td> </tr>

            </table>
            </form>
    </body>
</html>


