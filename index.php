<?php
require_once "./controladores/home.controller.php";

$home = new ControladorHome();
$home -> getHome();
?>