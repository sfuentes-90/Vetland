	<!-- section Contact start -->
	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center">
    				<h2 class="sec-title">Historial <span>Consultas</span></h2>
                    <div class="line-btm c-white"></div>
    			</div>
    		</div> <!-- heading row end -->
				<form class="contact-inner">
					<div class="row">
						<div class="col-md-4 col-md-offset-2"><div class="form-group">
							<label >Paciente</label><input type="text" class="form-control" value="<?php echo $paciente[0]->nombre ?>" readonly>
						</div></div>
				</form>	
			</div>
			<br>
			<div class="col-md-4 col-md-offset-2">
				<input type="search" class="form-control" data-table="table table-hover table-mc-default" placeholder="Buscar..."><p></p>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive-vertical">
						<table style="background-color:rgba(210, 210, 210, 0.95); border-radius:15px; font-weight:bold;" id="table" class="table table-hover table-mc-default">
							<col width="20">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="20">
							<col width="20">
							<col width="20">
							<thead>
								<tr>
									<th>ID</th>
									<th>Fecha Consulta</th>
									<th>Diagnosticos</th>
									<th>Procedimientos</th>
									<th>Medicamentos</th>
									<th>Vacuna</th>
									<th>Ver</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
						  
							<tbody>
							<?php foreach($consultas as $consulta): ?>
								<tr>
									<td data-title="RUT"><?php echo $consulta->idConsulta; ?></td>
									<td data-title="Nombre"><?php echo (date("d/m/Y", strtotime($consulta->fechaConsulta))) ?></td>
									<td data-title="Diagnosticos"><?php echo ($consulta->diagnosticos) ?></td>
									<td data-title="Procedimientos"><?php echo ($consulta->procedimientos) ?></td>
									<td data-title="Medicamentos"><?php echo ($consulta->medicamentos) ?></td>
									<td data-title="Vacunas"><?php echo ($consulta->vacunas) ?></td>
									<td data-title="Ver"><a href="<?php echo site_url('info_consulta/consulta/'.$consulta->idConsulta) ?>"><img src="<?=base_url()?>images/view.png" </a></td>
									<td data-title="Editar"><a href="<?php echo site_url('editar_consulta/consulta/'.$consulta->idConsulta) ?>"><img src="<?=base_url()?>images/edit.png" </a></td>
									<td data-title="Eliminar"><a href="<?php echo site_url('eliminar/eliminar_consulta/'.$consulta->idConsulta) ?>"><img src="<?=base_url()?>images/delete.png" </a></td>
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