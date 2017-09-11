<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="<?=site_url('/css/receta.css') ?>">
	</head>	
	<body>	
		<div class="print-area" id="print-area">
			<div class="receta">
				<h1>Clinica Veterinaria Vetland</h1>
				<p>19 Sur #236</p>
				<p>Villa los Robles - Talca</p>
				<p>Teléfono: (71) 231 3509 Celular: (9) 8775 1598</p>
				<p>Correo: contacto@clinicavetland.cl</p>
				<div class="datos">
					<div>
						<label>Nombre: </label><input class="input-nombre"  type="text" id="nombre" name="nombre" readonly>
						<label>Fecha: </label><input style=";"class="input-fecha"  type="text" id="fecha" name="fecha" readonly>						
						<label>Especie: </label><input class="input-especie" type="text"id="especie"  name="especie" readonly>
						<label>Sexo: </label><input class="input-sexo" type="text" id="sexo"  name="sexo" readonly>

						<p></p>
						<label>Raza: </label><input class="input-raza" id="raza" type="text" name="raza" readonly>
						<label>Estatura: </label><input class="input-estatura" id="estatura" type="text" name="estatura" readonly>					
						<label>Peso: </label><input class="input-peso" type="text" id="peso" name="peso" readonly>
						<label>Edad: </label><input class="input-edad" type="text" id="edad" name="edad" readonly>
						
					</div> 
				</div>
				<div class="rx">
					<br><br>
					<textarea class="rx" id="receta" cols="55" rows="30" name="rx"></textarea>
				</div>
				<div class="firma">
					<div class="doctor">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDra. <?php echo ($d['medico']) ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
					<div class="rut"><?php echo ($d['rutMedico']) ?></div>
					<div class="rut"><?php echo ($d['res']) ?></div>
				</div>
			</div>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#nombre').val(nombre);
			$('#fecha').val(fecha);
			$('#especie').val(especie);
			$('#sexo').val(sexo);
			$('#raza').val(raza);
			$('#estatura').val(estatura.concat(' Cm.'));
			$('#peso').val(peso.concat('Kg.'));	
			$('#edad').val(edad);
			$('#receta').val(receta);
			
		});
	</script>
</html>