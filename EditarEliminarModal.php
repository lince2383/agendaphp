<!-- Editar -->
<div class="modal fade" id="edit_<?php echo $row['idPersona']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<center> <h4 class="modal-title">Editar Contacto </h4></center>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="container-fluid">

					<form method="POST" action="editar.php?id=<?php echo $row['idPersona']; ?>">
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label">Nombre:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nombrecontacto" value="<?php echo $row['nombre']; ?>">
							</div>
						</div>				
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label">Celular:</label>
							</div>
							<div class="col-sm-10">
								<input type="tel" class="form-control" name="celular" value="<?php echo $row['telefono']; ?>">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label">Email:</label>
							</div>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="email"value="<?php echo $row['correo']; ?>">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label">Direcion:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion']; ?>">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
							<button type="submit" name="edit" class="btn btn-success" ><span class="fa fa-check"></span> Actualizar</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $row['idPersona']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<center> <h4 class="modal-title">Borrar Contacto </h4></center>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<p class="text-center">¿Estas seguro en borrar los datos de? </p>
				<h2 class="text-center"> <?php echo $row['nombre']; ?></h2>
			</div>
					
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
				<a href="delete.php?id=<?php echo $row['idPersona']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
				
			</div>
		</div>
	</div>
</div>