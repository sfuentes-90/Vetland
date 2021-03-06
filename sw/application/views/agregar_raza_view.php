	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center"><h2 class="sec-title">Editar <span>Raza</span></h2><div class="line-btm c-white"></div></div>
			</div> 
			<div class="row">
				<div class="col-md-12">
					<form class="contact-inner" action="<?=site_url("info_razas/agregar_raza")?>" method="POST">
						<div class="row">
							<div class="col-md-4"><div class="form-group"><label >Nombre</label><input type="text" class="form-control" name="nombre" placeholder="Nombres"></div></div>
							<div class="col-md-4">
							<select style="margin-top:30px;" class="form-control" name="tipo">
								<option class="form-control" value="F">Felino</option>
								<option class="form-control" value="C">Canino</option>
							</select>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12 text-center"><button class="btn btn-default">Agregar Raza</button></div>
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