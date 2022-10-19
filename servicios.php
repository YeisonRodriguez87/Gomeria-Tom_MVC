<?php
require_once "./controladores/servicios.controller.php";

$home = new ControladorServicios();
$home -> getServicios();
?>