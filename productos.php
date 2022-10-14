<?php
require_once "./controladores/productos.controller.php";

$home = new ControladorProductos();
$home -> getProductos();
?>