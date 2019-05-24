<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="blue">
				<h4 class="title">Administradores del Punto Digital</h4>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="card-content table-responsive">
					<a href="index.php?view=newuser" class="btn btn-success btn-block"><i class='fa fa-user'></i> Agregar</a>
					<br>
					</div>					
				</div>
			</div>
		<?php

		$users = UserData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<!--
			<th>Nick</th> 
			<th>Email</th>-->
			<th>Activo</th>
			<th>Admin</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<!--<td><?php echo $user->email; ?></td>
				
				<td><?php echo $user->username; ?></td> -->
				<td>
					<?php if($user->is_active):?>
						<i class="fa fa-check"></i>
					<?php endif; ?>
				</td>
				<td>
					<?php if($user->is_admin):?>
						<i class="fa fa-check"></i>
					<?php endif; ?>
				</td>
				<td style="width:30px;"><a href="index.php?view=edituser&id=<?php echo $user->id;?>" rel="tooltip" title="Editar" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i></a></td>
				</tr>
				<?php

			}
			?>
			</table>
			<?php



		}else{
			// no hay usuarios
		}


		?>

</div>
</div>
	</div>
</div>