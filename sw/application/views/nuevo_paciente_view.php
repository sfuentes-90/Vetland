		<section id="contact" >
			<div class="container">
				<div class="col-md-12">
					<!-- Encabezado de la pagina -->
					<div class="heading-inner text-center"><h2 class="sec-title">Agregar <span>Mascota</span></h2><div class="line-btm c-white"></div></div>
				</div>

				<div class="col-md-12">
					<form class="contact-inner" action="<?=site_url("nuevo_paciente/agregar")?>" method="POST">
						<!-- Primera Fila -->
						<div class="row">
							<input type="hidden" name="rut" value="<?php echo $propietario[0]->rutCliente ?>">
							<div class="col-md-4"><div class="form-group"><label >Propietario</label><input type="text" value="<?php echo $propietario[0]->nombreCliente.' '.$propietario[0]->apellidoCliente ?>" name="nombreDueno" class="form-control" placeholder="" readonly></div></div>
							<div class="col-md-4"><div class="form-group"><label >Nombre</label><input type="text"  name="nombre" class="form-control" placeholder="Nombre"></div></div>
							<div class="col-md-4"><label>Fecha Nacimiento</label><div class="input-group date"><input type="text" class="form-control" name="fecha"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span></div></div>
						</div>
						
						<!-- Segunda Fila -->
						<div class="row">
							<div class="col-md-4"><div class="form-group"><label >Sexo</label></div>
								<div class="radio ">
									<label><input type="radio" name="sexo" value="Macho">Macho</label>
									<label><input type="radio" name="sexo" value="Hembra">Hembra</label>
								</div>
							</div>								
							<div class="col-md-4"><div class="form-group"><label >Especie</label></div>
								<div class="radio ">
									<label><input type="radio" name="especie" value="Canino" id="canino">Canino</label>
									<label><input type="radio" name="especie" value="Felino" id="felino">Felino</label>
								</div>
							</div>
							<div class="col-md-4"><label >Raza</label>
								<div class="form-group">
									<select class="form-control" name="raza" id="raza">
									</select>
								</div>
							</div>
						</div>
						
						<!-- Tercera Fila -->
						<div class="row" id="3"><div class="col-md-12 text-center"><button class="btn btn-default">Agregar Mascota</button></div></div>
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
			autoclose: true,
			orientation: "bottom auto",
			 endDate: "28/08/2016"
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
			var canino = document.getElementById( 'canino' );	
			var felino = document.getElementById( 'felino' );
			var seleccionado = document.getElementById( 'raza' );

			canino.onclick = function(){ agregarOpciones( razasCanino, seleccionado ) };
			felino.onclick = function(){ agregarOpciones( razasFelino, seleccionado ) };
		};
	</script>
	</body>
</html>