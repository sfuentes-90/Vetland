	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center"><h2 class="sec-title">Agregar <span>Cliente</span></h2><div class="line-btm c-white"></div></div>
			</div> 
			<div class="row">
				<div class="col-md-12">
					<form class="contact-inner" action="<?=site_url("nuevo_cliente/agregar")?>" method="POST">
						<div class="row">
							<div class="col-md-4"><div class="form-group"><label >Rut</label><input type="text" class="form-control" name="rut" id="campo_rut" placeholder="RUT" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></div></div>
							<div class="col-md-4"><div class="form-group"><label >Nombres</label><input type="text" class="form-control" name="nombre" placeholder="Nombres"></div></div>
							<div class="col-md-4"><div class="form-group"><label >Apellidos</label><input type="text" class="form-control" name="apellido" placeholder="Apellidos"></div></div>
							
							<div class="col-md-4"><div class="form-group"><label >Teléfono</label><input name="telefono" type="text" class="form-control" placeholder="Teléfono"></div></div>
							<div class="col-md-4"><div class="form-group"><label >Email</label><input name="email" type="text" class="form-control" placeholder="Email"></div></div>
							<div class="col-md-4"><div class="form-group"><label >Dirección</label><input name="direccion" type="text" class="form-control" placeholder="Dirección"></div></div>	
						</div>
						
						<div class="row">
							<div class="col-md-12 text-center"><button class="btn btn-default">Agregar Cliente</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url("assets/js/bootstrap.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/jquery.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/bootstrap.min.js")?>"></script>
	<script type="text/javascript" src="<?=base_url("js/jquery.rut.js")?>"></script>
	
	<script>
		$('#campo_rut').Rut({
			on_error: function(){
				$('#campo_rut').val("");
				$('#campo_rut').select();
				alert('Rut incorrecto, vuelva a intentarlo'); 
			}
		});
	</script>
  </body>
</html>