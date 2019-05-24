<?php
$categories = CategoryData::getAll();
?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Genera una nueva actividad</h4>
      </div>
      <div class="card-content table-responsive">
    		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addmedic" role="form">

          <div class="form-group">
            <div class="col-md-12">
              <label>Curso a Dictar: </label>
              <select name="category_id" class="form-control">     
              <?php foreach($categories as $cat):?>
              <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>      
              <?php endforeach;?>
              </select>
            </div>
          </div>



          <div class="form-group">
            <div class="col-md-12">
              <label>Apellido y Nombre del Profesor/Tutor:</label>
              <input type="text" name="lastname" required class="form-control" id="lastname">
            </div>
          </div>                    
          

          <div class="form-group">
            <div class="col-md-12">
              <label>Salón donde se dictará el Curso: </label>
              <select type="text" name="name" class="form-control" id="name">
                <option value="Capacitación"> Capacitación</option>
                <option value="Microcine"> Microcine</option>
                <option value="Entretenimiento"> Entretenimiento</option>
              </select>
            </div>
          </div> 



          <div class="form-group">
            <div class="col-md-12">
              <label>Fecha de Inicio del Curso: </label>
              <input type="date" name="day_of_birth" class="form-control"  id="day_of_birth">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Días de cursada: </label>
              <select multiple name="address" class="form-control" id="address" multiple size="5">
                <option value="Lunes">Lunes</option>
                <option value="Lunes">Martes</option>
                <option value="Lunes">Miercoles</option>
                <option value="Lunes">Jueves</option>
                <option>Viernes</option>
              </select> 
            </div>
          </div>          


          <div class="form-group">
            <div class="col-md-12">
              <label>Horario: </label>
              <input type="time" name="city" class="form-control"  id="city" placeholder="Localidad">
            </div>
          </div>
         
          <div class="form-group">
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">
              <button type="submit" class="btn btn-success btn-lg btn-block"><i class='fa fa-plus-circle'></i> Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> 
</div>