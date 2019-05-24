 <div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="blue">
				<h4 class="title">Categorías de Usuarios del Punto digital</h4>
			</div>
			<div class="card-content table-responsive">
				<div class="row">
					<div class="col-md-2">
						<a href="index.php?view=newcoverage" class="btn btn-success btn-block"><i class='fa fa-plus-circle'></i> Agregar</a>					
					</div>					
				</div>
				<br>
				<?php
				$users = CoverageData::getAll();
				if(count($users)>0){
					// si hay usuarios
					?>

				<table class="table table-bordered table-hover">
					<thead>
					<th>Nombre</th>
					<th style="width:80px;"></th>
					</thead>
					<?php
					foreach($users as $user){
						?>
						<tr>
						<td><?php echo $user->lastname; ?></td>
						<td style="width:100px;">
							<a href="index.php?view=editcoverage&id=<?php echo $user->id;?>" rel="tooltip" title="Editar"class="btn btn-dark btn-xs"><i class='fa fa-edit'></i></a>
							<a href="index.php?view=delcoverage&id=<?php echo $user->id;?>" rel="tooltip" title="Eliminar" class="btn btn-danger btn-xs"><i class='fa fa-trash'></i></a>
						</td>
						</tr>
						<?php
					}
					?>
				</table>
				<?php
				}else{
					echo "<p class='alert alert-danger'>No hay Categorías Cargadas</p>";
				}
				?>

			</div>
		</div>
	</div>
</div>