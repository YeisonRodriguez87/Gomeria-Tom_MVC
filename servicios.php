<?php
require_once "./controllers/servicios.controller.php";

$home = new ControladorServicios();
$home -> getServicios();
?>