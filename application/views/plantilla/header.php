<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

   <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
  	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.css" >
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<!--Jquery , Bootstrap js-->
	<script src="<?= base_url() ?>assets/js/jquery_min.js" ></script>
	<script src="<?= base_url() ?>assets/bootsrap/js/bootstrap.min.js" ></script>

	
	<title>Tiempo</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-3 text-white">Weather Report</h1>
		<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
	</div>
</div class="container mt-0">
<div>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " href="<?= base_url('index.php/C_InicioSesion') ?>">Iniciar Sesión</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('index.php/C_Inicio') ?>">Ver Tiempo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('index.php/C_Registro') ?>">Registrarse</a>
  </li>
</ul>
</div>



<script>

$(document).ready(function () {
	

	$(".nav-link").on("focusin", function (e) {
		e.preventDefault();
		console.log("activo");
		$(this).addClass("active");
	});

	$(".nav-link").on("focusout", function (e) {
		e.preventDefault();
		console.log("desactivado");
		$(this).removeClass("active");
	});

});

</script>