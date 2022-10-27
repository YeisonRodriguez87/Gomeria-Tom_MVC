<?php
require_once "./controllers/contacto.controller.php";

$home = new ControladorContacto();
$home->getContacto();
?>