	<!-- section Contact start -->
	<section id="contact" >
    <div></div>
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center">
    				<h2 class="sec-title">Agregar <span>Cliente</span></h2>
                    <div class="line-btm c-white"></div>
    			</div>
    		</div> <!-- heading row end -->

			<div class="row">
				<div class="col-md-12">
					<form class="contact-inner" action="<?=site_url("editar_cliente/actualizar")?>" method="POST">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label >Rut</label>
									<input type="text" class="form-control" name="rut" value="<?php echo  ($cliente[0]->rutCliente);?>" readonly>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >Nombres</label>
									<input type="text" class="form-control" name="nombre" value="<?php echo  ($cliente[0]->nombreCliente);?>" placeholder="Nombre">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >Apellidos</label>
									<input type="text" class="form-control" name="apellido" value="<?php echo  ($cliente[0]->apellidoCliente);?>" placeholder="Apellido">
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
									<label >Teléfono</label>
									<input type="text" class="form-control" name="telefono" value="<?php echo  ($cliente[0]->telefono);?>" placeholder="Teléfono">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >Email</label>
									<input type="text" class="form-control" name="email" value="<?php echo  ($cliente[0]->email);?>" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >Dirección</label>
									<input type="text" class="form-control" name="direccion" value="<?php echo  ($cliente[0]->direccion);?>" placeholder="Dirección	">
								</div>
							</div>
							
						</div> <!-- row end -->
						<div class="row">
							<div class="col-md-12 text-center">
								<button class="btn btn-default">Guardar Cambios</button>
							</div>
						</div>
					</form>
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</section>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url("assets/js/bootstrap.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/jquery.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/bootstrap.min.js")?>"></script>
  </body>
</html>