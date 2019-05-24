<?php
$categories = CategoryData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
		  <div class="card-header" data-background-color="blue">
		    <h4 class="title">Actividades del Punto Digital</h4>
		  </div>
  		<div class="card-content table-responsive">
			<div class="row">
				<div class="col-md-2">
					<a href="index.php?view=newmedic" class="btn btn-success btn-block"><i class='fa fa-plus-circle'></i> Agregar</a>					
				</div>					
			</div>
			<br>
			<?php
			$users = MedicData::getAll();
			if(count($users)>0){
				// si hay usuarios
				?>
				<table class="table table-bordered table-hover">
				<thead>
				<th>Curso: </th>
				<th>Profesor/Tutor:</th>
				<th>Inicio del Curso:</th>
				<th>Dias de cursada:</th>
				<th>Horario:</th>
				<th></th>
				</thead>
				<?php
				foreach($users as $user){
					$category = $user->getCategory();
					?>
					<tr>
						<td><?php echo $category->name; ?></td>
						<td><?php echo $user->lastname; ?></td>
						<td><?php $nueva_fecha = date("d-m-Y",strtotime($user->day_of_birth)); echo $nueva_fecha; ?></td>
						<td><?php echo $user->address." en Sala de ".$user->name; ?></td>
						
						<td><?php echo $user->city."hs."; ?></td>
						<td style="width:150px;">
						<a href="index.php?view=editmedic&id=<?php echo $user->id;?>" rel="tooltip" title="Editar" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i></a>
						<a href="index.php?view=medichistory&id=<?php echo $user->id;?>" class="btn btn-success btn-xs"><i class='fa fa-bars'></i></a>
						<a href="index.php?view=delmedic&id=<?php echo $user->id;?>" rel="tooltip" title="Eliminar" class="btn btn-danger btn-xs"><i class='fa fa-trash'></i></a>
						</td>
					</tr>
					<?php
					?>
				<?php
					}
				}else{
					echo "<p class='alert alert-danger'>No hay Actividades cargadas</p>";
				}
				?>
				</table>
			</div>
		</div>
	</div>
</div>