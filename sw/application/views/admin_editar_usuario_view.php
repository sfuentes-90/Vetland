		<section id="contact" >
			<div class="container">
				<div class="col-md-12">
					<!-- Encabezado de la pagina -->
					<div class="heading-inner text-center"><h2 class="sec-title">Editar <span>Paciente</span></h2><div class="line-btm c-white"></div></div>
				</div>

				<div class="col-md-12">
					<form class="contact-inner" action="<?=site_url("admin_editar_usuario/actualizar")?>" method="POST">
						<!-- Primera Fila -->
						<div class="row">
							<div class="col-md-6"><div class="form-group"><label >Rut</label><input type="text" value="<?php echo $usuario[0]->rut ?>" name="rut" class="form-control" placeholder="" readonly></div></div>
							<div class="col-md-6"><div class="form-group"><label >Nombre</label><input type="text" value="<?php echo $usuario[0]->nombre ?>" name="nombre" class="form-control" placeholder="Nombre"></div></div>
							<div class="col-md-6"><div class="form-group"><label >Apellido</label><input type="text" value="<?php echo $usuario[0]->apellido ?>" name="apellido" class="form-control" placeholder="Apellido"></div></div>
							<div class="col-md-6"><div class="form-group"><label >Contraseña</label><input type="password" value="" name="password" class="form-control" placeholder="Contraseña"></div></div>
						</div>
						<!-- Tercera Fila -->
						<div class="row" id="3"><div class="col-md-12 text-center"><button class="btn btn-default">Guardar Cambios</button></div></div>
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
	<script>
		$('.input-group.date').datepicker({
			maxViewMode: 3,
			 startView: 2,
			todayBtn: true,
			language: "es",
			autoclose: true
		});
	</script>
	<script>
		// Coleccion de opciones
		var razasCanino = <?php echo json_encode($caninos) ?>;
		var razasFelino = <?php echo json_encode($felinos) ?>;

		// Funcion que renderiza los items en la lista
		var agregarOpciones = function( items, seleccionado ){
			// Se limpia el codigo dentro de las etiquetas select
			seleccionado.innerHTML = '';

			// Se llena con las opciones correspondientes
			for( var i = 0, l = items.length; i < l; i++ ){
				var item = document.createElement( 'option' );	// Se prepara la creacion de un elemento options
				item.innerHTML = items[i].raza;					// El HTML interno se define con el nombre de la raza
				item.value = items[i].idRaza;					// el value de la opcion se define con el ID de la raza
				item.name = 'raza';
				seleccionado.appendChild( item );				// Se agrega la opcion al DOM
			}
		};

		window.onload = function() {
			
			var canino = document.getElementById( 'Canino' );	
			var felino = document.getElementById( 'Felino' );
			var seleccionado = document.getElementById( 'raza' );

			canino.onclick = function(){ agregarOpciones( razasCanino, seleccionado ) };
			felino.onclick = function(){ agregarOpciones( razasFelino, seleccionado ) };
			
			<?php echo $paciente[0]->especie ?>.click($('#raza').val('2').change(););
		};
	</script>
	
	</body>
</html>