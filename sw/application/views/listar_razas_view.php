	<!-- section Contact start -->
	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center">
    				<h2 class="sec-title">Listar <span>Clientes</span></h2>
                    <div class="line-btm c-white"></div>
    			</div>
    		</div> <!-- heading row end -->
			<form class="contact-inner" action="<?=site_url("info_razas/agregar")?>" method="POST">
				<div class="row">
					<div class="col-md-12 text-center"><button class="btn btn-default">Agregar Raza</button></div>
				</div>
			</form>
				
			<div class="col-md-4 col-md-offset-2">
				<input type="search" class="form-control" data-table="table table-hover table-mc-default" placeholder="Buscar..."><p></p>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive-vertical">
						<table style="background-color:rgba(210, 210, 210, 0.95); border-radius:15px; font-weight:bold;" id="table" class="table table-hover table-mc-default">
							<col width="130">
							<col width="400">
							<col width="60">
							<col width="60">
							<col width="60">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Tipo</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
						  
							<tbody>
							<?php foreach($razas as $raza): ?>
								<tr>
									<td data-title="ID"><?php echo $raza->idRaza; ?></td>
									<td data-title="Nombre"><?php echo $raza->raza ?></td>
									<td data-title="Tipo"><?php echo $raza->tipo ?></td>
									<td data-title="Editar"><a href="<?php echo site_url('info_razas/editar/'.$raza->idRaza) ?>"><img src="<?=base_url()?>images/edit.png" </a></td>
									<td data-title="Eliminar"><a href="<?php echo site_url('info_razas/eliminar/'.$raza->idRaza) ?>"><img src="<?=base_url()?>images/delete.png" </a></td>
								</tr>
							<?php endforeach; ?>
							
							
							</tbody>
						</table>
					  </div>
				</div>
			</div>
		</div>
	</section>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>js/search.js"></script>	
	<script>
	function confirmDelete(url) {
		if (confirm("Esta seguro de eliminar este cliente?")) {
			document.location = url;
		}
	}
	</script>
  </body>
</html>