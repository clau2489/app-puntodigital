<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}
?>

<div class="container-fluid container-login">

	<div class="row">
		<div class="col-md-4"></div>	
    	<div class="col-md-4 text-center login-main">
    		<br><br>
    		<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    			<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    			<p>Pruebe iniciar sesion con su nueva contraseña.</p>
    		</div>
    		<?php setcookie("password_updated","",time()-18600);
    	 	endif; ?>
			<div class="text-center">
				<img src="img/pd.png" style="width: 150px; text-align: center">
			</div>
	    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
	    		<h3 style="color:white;">¡Bienvenido!</h3>
	    		<br>
	    		<h5 style="color:white;">Inicie sesión para ingresar al Sistema</h5>
                <fieldset>
		    	  	<div class="form-group">
		    		    <input class="form-control" placeholder="Usuario" name="mail" type="text">
		    		</div>
		    		<div class="form-group">
		    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
		    		</div>				    		
		    		<div class="row">
		    			<div class="col-md-12">
		    				<input class="btn btn-success btn-block" type="submit" value="Iniciar Sesion">
		    			</div>				    			
		    		</div>			    		
		    	</fieldset>
	    	</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
