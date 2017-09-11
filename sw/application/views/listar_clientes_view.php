	<!-- section Contact start -->
	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center">
    				<h2 class="sec-title">Listar <span>Clientes</span></h2>
                    <div class="line-btm c-white"></div>
    			</div>
    		</div> <!-- heading row end -->
				
				
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
									<th>RUT</th>
									<th>Nombre</th>
									<th>Ver</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
						  
							<tbody>
							<?php foreach($clientes as $cliente): ?>
								<tr>
									<td data-title="RUT"><?php echo $cliente->rutCliente; ?></td>
									<td data-title="Nombre"><?php echo (($cliente->nombreCliente)." ".($cliente->apellidoCliente)); ?></td>
									<td data-title="Ver"><a href="<?php echo site_url('info_cliente/cliente/'.$cliente->rutCliente) ?>"><img src="<?=base_url()?>images/view.png" </a></td>
									<td data-title="Editar"><a href="<?php echo site_url('editar_cliente/cliente/'.$cliente->rutCliente) ?>"><img src="<?=base_url()?>images/edit.png" </a></td>
									<td data-title="Eliminar"><a href="<?php echo site_url('eliminar/eliminar_cliente/'.$cliente->rutCliente)?>"><img src="<?=base_url()?>images/delete.png" </a></td>
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