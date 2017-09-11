	<!-- section Contact start -->
	<section id="contact" >
		<div class="container">
			<div class="col-md-12">
    			<div class="heading-inner text-center">
    				<h2 class="sec-title">Listar <span>Usuarios</span></h2>
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
							<col width="100">
							<col width="150">
							<col width="150">
							<col width="150">
							<col width="150">
							<col width="30">
							<col width="30">
							<thead>
								<tr>
									<th>RUT</th>
									<th>Nombre</th>
									<th>Creado por</th>
									<th>Modificado por</th>
									<th>Eliminado por</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
						  
							<tbody>
							<?php foreach($usuarios as $usuario): ?>
								<tr>
									<td data-title="RUT"><?php echo $usuario->rut; ?></td>
									<td data-title="Nombre"><?php echo (($usuario->nombre)." ".($usuario->apellido)); ?></td>
									<td data-title="Creado"><?php echo ( $this->usuarios_model->buscar_usuario($usuario->creado)[0]->nombre).' '.( $this->usuarios_model->buscar_usuario($usuario->creado)[0]->apellido).'<br/>El '.date("d/m/Y", strtotime( $this->usuarios_model->buscar_usuario($usuario->creado)[0]->fechaCreado)) ?></td>
									<td data-title="Modificado"><?php if(isset($usuario->modificado)) echo ( $this->usuarios_model->buscar_usuario($usuario->modificado)[0]->nombre).' '.( $this->usuarios_model->buscar_usuario($usuario->modificado)[0]->apellido).'<br/>El '.date("d/m/Y", strtotime( $this->usuarios_model->buscar_usuario($usuario->modificado)[0]->fechaCreado)) ?></td>
									<td data-title="Eliminado"><?php if(isset($usuario->eliminado)) echo ( $this->usuarios_model->buscar_usuario($usuario->eliminado)[0]->nombre).' '.( $this->usuarios_model->buscar_usuario($usuario->eliminado)[0]->apellido).'<br/>El '.date("d/m/Y", strtotime( $this->usuarios_model->buscar_usuario($usuario->eliminado)[0]->fechaCreado)) ?></td>
									<td data-title="Editar"><a href="<?php echo site_url('admin_editar_usuario/cliente/'.$usuario->rut) ?>"><img src="<?=base_url()?>images/edit.png" </a></td>
									<td data-title="Eliminar"><a href="<?php echo site_url('admin_listar_usuarios/eliminar/'.$usuario->rut) ?>"><img src="<?=base_url()?>images/delete.png" </a></td>
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