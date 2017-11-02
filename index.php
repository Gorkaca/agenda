<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<?php
 
if(isset($_GET["error"]) && $_GET["error"] != "login") {
		header("Location: index.php");
	}
 
 ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <form action="Login_Modelo.php" method="post">
            <p>USERNAME: <input type="text" name="nombre_usuario" /></p>
            <p>PASSWORD: <input type="text" name="contrasena" /></p>
            <input type="submit" name="bidali" value="Bidali" />
        </form>
    </body>
</html>