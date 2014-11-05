<?php
header('Content-Type: text/html; charset=utf-8');
   session_start();
   if (!isset($_SESSION['myusername']))
       header("Location: ../sajt/Glavna.php");
   session_destroy();
   header("Location: ../sajt/Glavna.php");
?>
<html>
    <head>
        <title>
            Logout page
        </title>
    </head>
    <body>
        <center>
            <h1>You have been logged out!</h1>
            <hr />
            <form method="post" action="./sajt/Glavna.php">
                <input type="submit" name="submit" value="Početna">
            </form>
        </center>
    </body>
</html>