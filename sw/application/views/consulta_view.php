		<section id="contact" >
		<div class="container">
			<!-- INFORMACION CLIENTE -->
			<div class="row">				
				<div class="col-md-12">
					<fieldset>
					<legend><label class="form-group"  style="color:#1157ca;" >Información Cliente</label></legend>
						<form class="contact-inner" action="<?=site_url("nuevo_cliente/agregar")?>" method="POST">
								<div class="col-md-4"><div class="form-group"><label >RUT</label><input type="text" class="form-control" name="rut" value="<?php echo $cliente[0]->rutCliente ?>" readonly></div></div>
								<div class="col-md-4"><div class="form-group"><label >Nombre</label><input type="text" class="form-control" name="nombre" value="<?php echo $cliente[0]->nombreCliente ?>" readonly></div></div>
								<div class="col-md-4"><div class="form-group"><label >Apellido</label><input type="text" class="form-control" name="apellido" value="<?php echo $cliente[0]->apellidoCliente ?>" readonly></div></div>
								
						</form>
					</fieldset>
				</div>		
			</div>
			</br></br>
			<!-- INFORMACION PACIENTE -->
			<div class="row">				
				<div class="col-md-12">
					<fieldset>
					<legend><label class="form-group"  style="color:#1157ca;" >Información Mascota</label></legend>
						<form class="contact-inner" action="<?=site_url("nuevo_cliente/agregar")?>" method="POST">
								<div class="col-md-4"><div class="form-group"><label >Nombre</label><input  type="text" class="form-control" name="nombreMascota" id="nombre" value="<?php echo $paciente[0]->nombre ?>" readonly></div></div>
								<div class="col-md-4"><div class="form-group"><label >Fecha Nacimiento</label><input type="text" class="form-control" name="nombre" value="<?php echo (date("d/m/Y", strtotime($paciente[0]->fechaNacimiento))) ?>" readonly></div></div>
								<div class="col-md-4"><div class="form-group"><label >Edad</label><input type="text" class="form-control" name="edad" id="edad" value="<?php echo (date_diff(date_create($paciente[0]->fechaNacimiento), date_create('now'))->y)." Años" ?>" readonly></div></div>
								<div class="col-md-4"><div class="form-group"><label >Especie</label><input type="text" class="form-control" id="especie" name="especie" value="<?php echo $paciente[0]->especie ?>" readonly></div></div>
								<div class="col-md-4"><div class="form-group"><label >Raza</label><input type="text" class="form-control" id="raza" name="raza" value="<?php echo $raza[0]->raza."" ?>" readonly></div></div>
								<div class="col-md-4"><div class="form-group"><label >Sexo</label><input type="text" class="form-control" id="sexo"name="sexo" value="<?php echo $paciente[0]->sexo ?>" readonly></div></div>
						</form>
					</fieldset>
				</div>		
			</div>
			</br></br>
			<!-- INFORMACION CONSULTA -->
			<div class="row">				
				<div class="col-md-12">
					<fieldset>
					<legend><label class="form-group" style="color:#1157ca;">Información Consulta</label></legend>
						<form class="contact-inner" action="<?=site_url("consulta/agregar_consulta")?>" method="POST">
								<div class="col-md-4">
									<div class="form-group">
										<label >Tipo Consulta
										</label><select class="form-control" name="tipoConsulta">
											<option class="form-control" value="regular">Regular</option>
											<option class="form-control" value="urgencia">Urgencia</option>
										</select>
									</div>
								</div>
								<div class="col-md-1"></div>
								<input type="hidden" name="rutDueno" value="<?php echo $cliente[0]->rutCliente ?>">
								<input type="hidden" name="idPaciente" value="<?php echo $paciente[0]->id ?>">
								<div class="col-md-2"><div class="form-group"><label >Peso (Kg.)</label><input type="text" class="form-control" id="peso" name="peso" value=""></div></div>
								<div class="col-md-2"><div class="form-group"><label >Temperatura (C°)</label><input type="text" class="form-control" id="temperatura" name="temperatura" value=""></div></div>
								<div class="col-md-2"><div class="form-group"><label >Estatura (Cm.)</label><input type="text" class="form-control" id="estatura" name="estatura" value=""></div></div>

								

								
								<div class="col-md-4"><div class="form-group"><label >Alimentacion</label><input type="text" class="form-control" name="alimentacion" value=""></div></div>
								<div class="col-md-4"><div class="form-group"><label >Vacunas</label><input type="text" class="form-control" name="vacunas" value=""></div></div>
								<div class="col-md-4"><div class="form-group"><label >Antiparasitarios</label><input type="text" class="form-control" name="antiparacitarios" value=""></div></div>
								
								<div class="col-md-12"><div class="form-group"><label >Diagnostico</label><input type="text" class="form-control" name="diagnostico" value=""></div></div>
								<div class="col-md-12"><div class="form-group"><label >Medicamentos Administrados</label><input type="text" class="form-control" name="medicamentos" value=""></div></div>
								<div class="col-md-12"><div class="form-group"><label >Procedimientos</label><input type="text" class="form-control" name="procedimientos" value=""></div></div>
								
								<div class="col-md-12"><div class="form-group"><label >Observaciones</label><textarea class="form-control" name="observaciones" rows="4"></textarea></div></div>
								<div class="col-md-12"><div class="form-group"><label >Receta</label><textarea class="form-control" id="receta" name="receta" rows="4"></textarea></div></div>
								

								<div class="row">
									<div class="col-md-6"><div class="form-group"><label >Atendido Por: </label><input type="text" class="form-control" value="<?php echo $this->session->userdata['name'].' '.$this->session->userdata['apellido'] ?>" readonly></div></div>
									<div class="col-md-6"><div class="form-group"><label >Precio Referencial: </label><input type="text" id="precio" onChange="agregarPeso();" name="valorReferencial" class="form-control" placeholder="Precio Referencial" ></div></div>
								</div>
								
								
<!-- boton receta -->			<input id="ver_receta" style="margin-left:485px; margin-top: 20px;" type="button" class="btn btn-default"value="Ver Receta"/>
								<div class="row"><div style="margin-top: 0px;" class="col-md-12 text-center"><button class="btn btn-default">Guardar Consulta</button></div>
								
								</div>
						</form>
						
					</fieldset>
				</div>		
			</div>
			
		</div>
	</section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url("assets/js/bootstrap.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/jquery.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/bootstrap.min.js")?>"></script>
	
		<script>
			function agregarPeso(){
				var precio = $('#precio').val(); 	
				var n = precio.match(/\d+$/)[0];
				$('#precio').val('$'.concat(precio));
			}
			
			
			$('#ver_receta').click(function(){
				var nombre=$('#nombre').val();
				var fecha=new Date();
				var dd = fecha.getDate();
				var mm = fecha.getMonth()+1; //January is 0!

				var yyyy = fecha.getFullYear();
				if(dd<10){
					dd='0'+dd
				} 
				if(mm<10){
					mm='0'+mm
				} 
				var fecha = dd+'/'+mm+'/'+yyyy;
				
				var especie=$('#especie').val();
				var sexo=$('#sexo').val();
				var raza=$('#raza').val();
				var estatura=$('#estatura').val();
				var peso=$('#peso').val();
				var edad=$('#edad').val();
				var receta=$('#receta').val();
				
				console.log(nombre);
				$.ajax({
					type: "POST",
					url: '<?=base_url("consulta/ver_receta")?>',
					data: {},
					cache: false,
					success: function(result){
						var popup = window.open('<?=base_url("consulta/ver_receta")?>','_blank');
						popup.window.nombre = nombre;
						popup.window.fecha = fecha;
						popup.window.especie = especie;
						popup.window.sexo = sexo;
						popup.window.raza = raza;
						popup.window.estatura = estatura;
						popup.window.peso = peso;
						popup.window.edad = edad;
						popup.window.receta = receta;
					}
				});
			});
	</script>
  </body>
</html>