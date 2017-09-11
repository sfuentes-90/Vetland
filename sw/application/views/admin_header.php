<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">   
		<title>VETLAND - <?php echo $titulo ?></title>
		<link href="<?=base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url("css/style.css")?>">
		<link rel="stylesheet" href="<?=base_url("css/bootstrap-datepicker3.css")?>">
	</head>
<body class="bg-overlay pattern" data-spy="scroll" data-target=".navbar-fixed-top" >
	<header id="header">
		<nav class="navbar navbar-default navbar-fixed-top"  id="tf-menu">
			<div class="container">
				<div class="row">		
					<div class="collapse navbar-collapse clearfix navMenu" role="navigation">
						<ul class="nav navbar-nav navbar-left">
							<li><a class="active" href="<?php echo site_url("admin_home/"); ?>"><img src="<?=base_url()?>/images/home-logo.png" alt="" class="home-logo"></a></li>
							
							<li class="dropdown">
								<a href="#" class="dropbtn">Usuarios</a>
								<div class="dropdown-content">
									<a href="<?php echo site_url("admin_nuevo_usuario/"); ?>">Nuevo Usuario</a>
									<a href="<?php echo site_url("admin_listar_usuarios/"); ?>">Listar Usuarios</a>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" class="dropbtn">Historial</a>
								<div class="dropdown-content">
									<a href="<?php echo site_url("admin_listar_clientes/"); ?>">Clientes</a>
								</div>
							</li>
<li id="login"><a class="active" onmouseover="this.innerHTML='Cerrar Sesión';" onmouseout="this.innerHTML='Bienvenido <?php echo $this->session->userdata('name') ?>';" href="<?php echo site_url('login/logout') ?>">Bienvenido <?php echo $this->session->userdata('name') ?></a></li>							
				        </ul>
	      			</div>				
				</div>
			</div>
		</nav>
	</header>