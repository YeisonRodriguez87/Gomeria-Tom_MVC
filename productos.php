<?php
require_once "./controllers/productos.controller.php";

$home = new ControladorProductos();
$home -> getProductos();
?>