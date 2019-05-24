<?php 
$user = MedicData::getById($_GET["id"]);
$categories = CategoryData::getAll();
?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-header" data-background-color="blue">
          <h4 class="title">Edita tu Actividad</h4>
      </div>
      <div class="card-content table-responsive">
    		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatemedic" role="form">

        <div class="form-group">
          <div class="col-md-12">
            <?php $cat = $user->getCategory(); ?>
            <label>Curso a Dictar</label>
            <input type="text" name="category_id" id="category_id" class="form-control" value="<?php echo $cat->name; ?>" disabled>
            </input>
          </div>
        </div>

          <div class="form-group">
            <div class="col-md-12">
              <label>Apellido y Nombre del Profesor/Tutot:</label>
              <input type="text" name="lastname" value="<?php echo $user->lastname;?>" required class="form-control" id="lastname" placeholder="Apellido">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <label>Salon donde se dictará el curso </label>
              <select type="text" name="name" value="<?php echo $user->address;?>" class="form-control" id="name" placeholder="Nombre" disabled>
              <option value="Capacitación"> Capacitación</option>
              <option value="Microcine"> Microcine</option>
              <option value="Entretenimiento"> Entretenimiento</option>                
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <label>Fecha de Inicio del Curso</label>
              <input type="date" name="day_of_birth" class="form-control"  id="day_of_birth" value="<?php echo $user->day_of_birth;?>">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Días de cursada: </label>
              <select multiple name="address" class="form-control" id="address" multiple size="5" value="<?php echo $user->address;?>">
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
              <input type="time" name="city" class="form-control"  id="city" value="<?php echo $user->city;?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
              <button type="submit" class="btn btn-success btn-lg btn-block">Actualizar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
	</div>
</div>
