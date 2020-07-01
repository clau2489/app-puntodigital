<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<br>
			<img src="img/1.jpg" style="width: 100%; text-align: center">
			<h3 class="title">Bienvenido a la Plataforma de Gestión Educativa del Punto Digital de Marcos Paz</h3>
			<br>
			<p>Ingrese usuario y contraseña para ingresar al sistema</p>
			<br>		
		</div>	
    	<div class="col-md-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    			<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    			<p>Pruebe iniciar sesion con su nueva contraseña.</p>
    		</div>
    		<?php setcookie("password_updated","",time()-18600);
    	 	endif; ?>
			<div class="card">
  				<div class="text-center">
  					<img src="img/pd.png" style="width: 50%; text-align: center">
  				</div>
  				<br>
  				<br>
  				<div class="card-content col-md-offset-1 col-md-10 text-center">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
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
			</div>
		</div>
	</div>
</div>
<footer class="section footer-classic context-dark bg-image" style="background: #5579ac;">
	<div class="container">
	  <div class="row row-30">
	    <div class="col-md-3">
	      <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
	        <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>puntodigitalmpaz</span><span>. </span></p>
	        <p><span>Todos los derechos reservados.</span></p>
	      </div>
	    </div>
	    <div class="col-md-3">
	      <h5>Punto Digital CIC</h5>
	      <dl class="contact-list">
	        <dd>Eva Duarte y J.D. Perón - B° Ntra. Sra de la Paz</dd>
	      </dl>
	      <dl class="contact-list">
	        <dd><a href="mailto:#">pdcic@gmail.com</a></dd>
	      </dl>
	      <dl class="contact-list">
	        <dd><a href="tel:#">+11-5034-5898</a> <span>
	        </dd>
	      </dl>
	    </div>
	    <div class="col-md-3">
	      <h5>Punto Digital UMI</h5>
	      <dl class="contact-list">
	        <dd>Eva Duarte y J.D. Perón - B° Santa Catalina</dd>
	      </dl>
	      <dl class="contact-list">
	        <dd><a href="mailto:#">pdcic@gmail.com</a></dd>
	      </dl>
	      <dl class="contact-list">
	        <dd><a href="tel:#">+11-5034-5898</a> <span>
	        </dd>
	      </dl>
	    </div>
	    <div class="col-md-3">
	      <h5>Punto Digital Polo Universitario</h5>
	      <dl class="contact-list">
	        <dd>Eva Duarte y J.D. Perón - Marcos Paz</dd>
	      </dl>
	      <dl class="contact-list">
	        <dd><a href="mailto:#">pdcic@gmail.com</a></dd>
	      </dl>
	      <dl class="contact-list">
	        <dd><a href="tel:#">+11-5034-5898</a> <span>
	        </dd>
	      </dl>
	    </div>                                    
	  </div>
	</div>
</footer>
