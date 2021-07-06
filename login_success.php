<?php

session_start();
if(!isset($_SESSION["myusername"])){
    header("Location:index.php");
}
?>
<html>
    <body>
        Login Successful
        <a href="logout.php">Logout</a>
    </body>
</html>
