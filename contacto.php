<?php
require_once "./controladores/contacto.controller.php";

$home = new ControladorContacto();
$home->getContacto();
?>