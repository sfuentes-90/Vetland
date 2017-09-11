		<section id="contact" >
			<div class="container">
				<div class="col-md-12">
					<!-- Encabezado de la pagina -->
					<div class="heading-inner text-center"><h2 class="sec-title">Editar <span>Paciente</span></h2><div class="line-btm c-white"></div></div>
				</div>

				<div class="col-md-12">
					<form class="contact-inner">
						<!-- Primera Fila -->
						<div class="row">
							<div class="col-md-4"><div class="form-group"><label >Nombre Dueño</label><input type="text" value="<?php echo $cliente[0]->nombreCliente.' '.$cliente[0]->apellidoCliente ?>" name="rut" class="form-control" placeholder="" readonly></div></div>
							<div class="col-md-4"><div class="form-group"><label >Nombre</label><input type="text" value="<?php echo $paciente[0]->nombre ?>" name="nombre" class="form-control" placeholder="Nombre" readonly></div></div>
							<div class="col-md-4"><label>Fecha Nacimiento</label><div class="input-group date"><input type="text" value="<?php echo (date("d/m/Y", strtotime($paciente[0]->fechaNacimiento))) ?>" readonly class="form-control" name="fecha"><span class="input-group-addon" readonly><i class="glyphicon glyphicon-th" readonly></i></span></div></div>
						</div>
						
						<!-- Segunda Fila -->
						<div class="row">
							<div class="col-md-4"><label >Raza</label><div class="form-group"><input type="text" value="<?php echo $raza[0]->raza ?>" class="form-control" name="raza" 	placeholder="Raza" readonly></div></div>
							<div class="col-md-4"><div class="form-group"><label >Especie</label></div>
								<div class="radio" readonly>
									<label><input type="radio" <?php if($paciente[0]->especie == 'Canino') echo 'checked' ?> disabled name="especie" value="Canino" >Canino</label>
									<label><input type="radio" <?php if($paciente[0]->especie == 'Felino') echo 'checked' ?> disabled name="especie" value="Felino">Felino</label>
								</div>
							</div>
							<div class="col-md-4"><div class="form-group"><label >Sexo</label></div>
								<div class="radio ">
									<label><input type="radio" <?php if($paciente[0]->sexo == 'Macho') echo 'checked' ?> disabled name="sexo" value="Macho">Macho</label>
									<label><input type="radio" <?php if($paciente[0]->sexo == 'Hembra') echo 'checked' ?> disabled name="sexo" value="Hembra">Hembra</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url("assets/js/bootstrap.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/jquery.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/bootstrap.min.js")?>"></script>
	<script type="text/javascript" src="<?=base_url("js/bootstrap-datepicker.min.js")?>"></script>   
	<script src="<?=base_url("js/locales/bootstrap-datepicker.es.min.js")?>" charset="UTF-8"></script>  
	

	</body>
</html>