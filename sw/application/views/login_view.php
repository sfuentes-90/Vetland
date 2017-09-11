<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">   
		<title>VETLAND - Nuevo Cliente</title>
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url()?>css/style.css">
	</head>
  
	<body>
  
	<div style="background-image: url(<?=base_url() ?>images/background-3.png),	linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.95));background-repeat: no-repeat;
    background-attachment: fixed;
	background-size: cover;" class="vertical-center bg-overlay">
		<form class="form-signin col-md-4" method="POST">       
			<h2 class="sec-title">Iniciar <span>Sesión</span></h2>
			
			<input type="text" class="form-control" name="username" placeholder="Usuario" required="" autofocus="" />
			<input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/>     
			<button class="btn btn-default" type="submit">Login</button>	
		</form>
	</div>
	</body>