	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center"><h2 class="sec-title">Agregar <span>Cliente</span></h2><div class="line-btm c-white"></div></div>
			</div> 
			<div class="row">
				<div class="col-md-12">
					<form class="contact-inner" action="<?=site_url("admin_nuevo_usuario/agregar")?>" method="POST">
						<div class="row">
							<div class="col-md-6"><div class="form-group"><label >Rut</label><input type="text" class="form-control" name="rut" id="campo_rut" placeholder="RUT" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></div></div>
							<div class="col-md-6"><div class="form-group"><label >Nombres</label><input type="text" class="form-control" name="nombre" placeholder="Nombres"></div></div>
							<div class="col-md-6"><div class="form-group"><label >Apellidos</label><input type="text" class="form-control" name="apellido" placeholder="Apellidos"></div></div>
							<div class="col-md-6"><div class="form-group"><label >Contraseña</label><input name="pass" type="password" class="form-control" placeholder="Password"></div></div>
						</div>					
						<div class="row">
							<div class="col-md-12 text-center"><button class="btn btn-default">Agregar Usuario</button></div>
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