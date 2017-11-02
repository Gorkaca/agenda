<?php
require_once("../controlador/Login_Controlador.php");
$menu = new usuario();
$pd = $menu->lista_usuarios();
require_once("../vista/Vista_Usuarios.php");
?>
