	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center">
    				<h2 class="sec-title">Información <span>Cliente</span></h2>
                    <div class="line-btm c-white"></div>
    			</div>
    		</div> <!-- heading row end -->
		<div class="row">
			<div class="col-md-12">
				<form class="contact-inner">
					<div class="row">
						<div class="col-md-4"><div class="form-group">
							<label >Rut</label><input type="text" class="form-control" value="<?php echo  ($cliente[0]->rutCliente);?>" readonly>
						</div></div>
						<div class="col-md-4"><div class="form-group">
							<label >Nombres</label>	<input type="text" class="form-control" value="<?php echo  ($cliente[0]->nombreCliente);?>" readonly>
						</div></div>
						<div class="col-md-4"><div class="form-group">
							<label >Apellidos</label><input type="text" class="form-control" value="<?php echo  ($cliente[0]->apellidoCliente);?>" readonly>
						</div></div>				
						<div class="col-md-4"><div class="form-group">
							<label >Teléfono</label><input type="text" class="form-control" value="<?php echo  ($cliente[0]->telefono);?>" readonly>
						</div></div>
						<div class="col-md-4"><div class="form-group">
							<label >Email</label><input type="text" class="form-control" value="<?php echo  ($cliente[0]->email);?>" readonly>
						</div></div>
						<div class="col-md-4"><div class="form-group">	
							<label >Dirección</label><input type="text" class="form-control" value="<?php echo  ($cliente[0]->direccion);?>" readonly>
						</div></div>		
					</div>

				</form>	
				<p></p><p></p><p>
			</div>
			<div class="row text-center">
				<h2 class="sec-title">Mascotas <span>Cliente</span></h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive-vertical">
						<table style="background-color:rgba(210, 210, 210, 0.95); border-radius:15px; font-weight:bold;" id="table" class="table table-hover table-mc-default">
							<thead>
								<col width="100">
								<col width="150">
								<col width="150">
								<col width="150">
								<col width="150">
								<col width="60">
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Creado por</th>
								<th>Editado por</th>
								<th>Eliminado por</th>
								<th>Historial</th>
							</tr>
							</thead>
						  
							<tbody>
							<?php foreach($pacientes as $row): ?>
								<tr>
									<td data-title="ID"><?php echo $row->id; ?></td>
									<td data-title="Nombre"><?php echo $row->nombre; ?></td>
									<td data-title="Creado"><?php echo ( $this->usuarios_model->buscar_usuario($row->creado)[0]->nombre).' '.( $this->usuarios_model->buscar_usuario($row->creado)[0]->apellido).'<br/>El '.date("d/m/Y", strtotime(( $row->fechaCreacion ))) ?></td>
									<td data-title="Modificado"><?php if(isset($cliente->modificado)) echo ( $this->usuarios_model->buscar_usuario($row->modificado)[0]->nombre).' '.( $this->usuarios_model->buscar_usuario($row->modificado)[0]->apellido).'<br/>El '.date("d/m/Y", strtotime(( $row->fechaModificado ))) ?></td>
									<td data-title="Eliminado"><?php if(isset($cliente->eliminado)) echo ( $this->usuarios_model->buscar_usuario($row->eliminado)[0]->nombre).' '.( $this->usuarios_model->buscar_usuario($row->eliminado)[0]->apellido).'<br/>El '.date("d/m/Y", strtotime(( $row->fechaEliminado ))) ?></td>
									<td data-title="Ver"><a href="<?php echo site_url('historial_consultas/paciente/'.$row->id) ?>"><img class="list-icon" src="<?=base_url()?>images/historial.png" </a></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<form class="contact-inner" action="<?=site_url("info_cliente/agregar_mascota")?>" method="POST">
				<div class="row">
					<input type="hidden" name="rutDueno" value="<?php echo  ($cliente[0]->rutCliente);?>">
					<div class="col-md-4-offset-12 ">
						<button class="btn btn-default">Agregar Mascota</button>
					</div>
				</div>
			</form>
		</div><!-- container end -->
	</section>
	<!-- section Contact end -->
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?=base_url("assets/js/bootstrap.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/jquery.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("js/bootstrap.min.js")?>"></script>
	
  </body>
</html>