<?php
require_once("../controlador/Agenda.php");
$menu = new agenda();
$pd = $menu->lista_contactos();
require_once("../vista/Vista_Agenda.php");
?>

