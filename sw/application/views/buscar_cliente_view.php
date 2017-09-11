	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center">
    				<h2 class="sec-title">Buscar <span>Cliente</span></h2>
                    <div class="line-btm c-white"></div>
    			</div>
    		</div> <!-- heading row end -->

			<div class="row">
				<div class="col-md-12">
					<form class="contact-inner" action="<?=site_url("buscar_cliente/buscar_rut")?>" method="POST">
						<div class="row">
							<div class="col-md-4"><div class="form-group"><label >Rut</label><input type="text" class="form-control" name="rut" placeholder="RUT"></div></div>
							<div class="col-md-4 text-center"><button class="btn btn-default">Buscar Cliente</button></div>
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