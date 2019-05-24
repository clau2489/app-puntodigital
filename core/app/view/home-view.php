<?php
$thejson=null;
$events = ReservationData::getEvery();
foreach($events as $event){
	$thejson[] = array("title"=>$event->time_at,"url"=>"./?view=editreservation&id=".$event->id,"start"=>$event->date_at);
}
?>

<!--

<script>
	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '<?php echo date('Y-m-d');?>',
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: <?php echo json_encode($thejson); ?>
		});
		
	});

</script> -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="blue">
			    <h4 class="title">Bienvenido al Sistema de Gestion de Usuarios del Punto Digital</h4>
			 </div>
		  	<div class=" col-md-12">
				<h6 class="tutorial">Mini Guía para Administradores</h6>
				<p class="tutorial"> Este sistema le permitirá gestionar los datos de los usuarios del Punto digital, para ello debera seguir una serie de pasos para efectuar una carga correcta de los datos.<br><br>
				Si usted esta viendo esta pantalla significa que se ha logueado con éxito.<br> (En caso de olvidar su usuario y contraseña, contactesé con el administrador de Base de Datos para solicitar una nueva clave).<br><br>
				La información de cada Punto Digital es administrada en forma independiente, es decir, que los datos que figuran en esta base de datos, no es compartida con ningun otra sede de Punto Digital.<br><br>
				Para comenzar usted debe crear las distintas categorias de Usuarios que tiene el Punto Digital:<br>
				1- Visitante/ Digital Asistido: Es aquella persona que hace uso de las instalaciones y equipos del Punto Digital, como asimismo realiza consultas de toda indole. <br>
				2- Alumno en Curso: Es aquella persona que tiene en vigencia alguna capacitacion dentro del Punto Digital, en el caso de nuestro Sistema de Gestion, esas capacitaciones estan denominadas como: "Actividades".<br>
				3- Alumno con Programa de Articulacion: Es aquella persona cuyo objetivo es hacer uso de las instalaciones y equipos del Punto Digital manteniendo un programa de capacitación externo al Punto Digital.<br><br>
				Una vez Ingresadas las Categorias de Usuarios, usted va a poder ingresar los datos de un Usuario en particular haciendo click en "LISTA DE USUARIOS" -> "AGREGAR". Tenga en cuenta que existen dos tipos de cargas, una carga preliminar en donde usted podrá guardar los datos mas relevantes y obligatorios de un Usuario. 
				Luego, seleccione "EDITAR" si desea completar los datos. 
			</div>
		</div>
	</div>
</div>
