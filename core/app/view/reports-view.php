<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="blue">
			  <h4 class="title">Reportes</h4>
			</div>
			<div class="card-content table-responsive">
			<form class="form-horizontal" role="form">
				<input type="hidden" name="view" value="reports">
		        <?php
				$pacients = PacientData::getAll();
		        ?>
			  	<div class="form-group">
			  		<h5>Filtrar por:</h5>
					<div class="col-md-10">
						<div class="input-group">
						  <span>Buscar</span>
							<input type="text" name="lastname" class="form-control">
						</div>
					</div>	
					<div class="row">
					    <div class="col-md-2">
					    	<button class="btn btn-primary btn-block">Buscar</button>
					    </div>
					</div>
				</div>
			</form>
	<?php
	$users= array();
	if((isset($_GET["lastname"]))){
		$sql = "select * from pacient where ";
		$users = PacientData::getBySQL($sql);
	}else{
		$users = PacientData::getAll();
	}
	if(count($users)>0){
	// si hay usuarios
	$_SESSION["report_data"] = $users;
	?>
	<div id="divName" class="panel panel-default">
		<div class="panel-heading">Reportes</div>
					<table class="table table-bordered table-hover">
					<thead>
					<th>Nombre completo</th>
					<th>Documento</th>
					<th>Direccion</th>
					<th>Localidad</th>
					<th>Telefono</th>
					<th>Acciones</th>
					</thead>
					<?php
					foreach($users as $user){
						?>
						<tr>
						<td><?php echo $user->lastname." ".$user->name; ?></td>
						<td><?php echo $user->document; ?></td>
						<td><?php echo $user->address; ?></td>
						<td><?php echo $user->city; ?></td>
						<td><?php echo $user->phone; ?></td>
						<td style="width:150px;">
						<a alt="Buscar" href="index.php?view=editpacient&id=<?php echo $user->id;?>" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i></a>
						<a href="index.php?view=pacienthistory&id=<?php echo $user->id;?>" class="btn btn-success btn-xs"><i class='fa fa-bars'></i></a>
						<a href="index.php?view=delpacient&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs"><i class='fa fa-trash'></i></a>
						</td>
						</tr>
						<?php
					}
					?>
					</table>
					<?php
					}else{
						echo "<p class='alert alert-danger'>No existen registros</p>";
					}
					?>

			</div>
		</div>
	</div>
</div>