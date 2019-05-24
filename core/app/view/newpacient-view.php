<?php
$coverage = CoverageData::getAll();
?>
<div class="row">
  <div class="col-md-2"></div>
	<div class="col-md-8">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Ingresar Nuevo Usuario</h4>
      </div>
      <div class="card-content table-responsive">
      
      <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient" role="form">
        <p style="text-transform: initial; color: red; padding-left: 30px">* Campos Obligatorios</p>

        <div class="form-group">
          <div class="col-md-12">
            <label>Modalidad del Usuario: *</label>
            <select name="coverage_id" class="form-control" id="coverage_id" required>
              <?php foreach($coverage as $cov):?>    
              <option value="<?php echo $cov->id; ?>"><?php echo $cov->lastname; ?></option>
              <?php endforeach;?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <label>Apellido: *</label>
            <input type="text" name="lastname" class="form-control" id="lastname" required>
          </div>
        </div> 

        <div class="form-group">
          <div class="col-md-12">
            <label>Nombre: *</label>
            <input type="text" name="name" required class="form-control" id="name">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>N° de Documento: *</label>
            <input name="document" class="form-control" id="document" required >
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Sexo: </label>
            <label class="checkbox-inline">
              <input type="radio" id="inlineCheckbox1" name="gender"  value="h" required> Hombre
            </label>
            <label class="checkbox-inline">
              <input type="radio" id="inlineCheckbox2" name="gender"  value="m" required> Mujer
            </label>
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Fecha de Nacimiento: </label>
            <input type="date" name="day_of_birth" class="form-control"  id="day_of_birth">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Dirección: </label>
            <input type="text" name="address" class="form-control" id="address">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Barrio: </label>
            <input type="text" name="neigh" class="form-control"  id="neigh">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Localidad: </label>
            <input type="text" name="city" class="form-control" id="city">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Correo Electrónico: </label>
            <input type="text" name="email" class="form-control" id="email">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Telefono Fijo: </label>
            <input type="text" name="phone" class="form-control" id="phone">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>WhatsApp: *</label>
            <input type="text" name="whatsapp" class="form-control" id="whatsapp" required>
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Link Facebook:</label>
            <input type="text" name="fb" class="form-control" id="fb">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Link Instagram:</label>
            <input type="text" name="ig" class="form-control" id="ig">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <label>Link LinkedIn:</label>
            <input type="text" name="lk" class="form-control" id="lk">
          </div>
        </div>        
        <!--
        <div class="form-group">
          <div class="col-md-12">
            <label class="checkbox-inline">
              <input type="radio" id="inlineCheckbox1" name="coverage" required value="p"> Particular
            </label>
            <label class="checkbox-inline">
              <input type="radio" id="inlineCheckbox2" name="coverage" required value="o"> Obra Social
            </label>
          </div>
        </div> -->
        <!--
        <div class="form-group">
          <div class="col-md-12">
            <input type="text" name="sick" class="form-control" id="sick" placeholder="Numero de Carnet/Socio">
          </div>
        </div> -->
        <div class="form-group">
          <div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-success btn-lg btn-block"><i class='fa fa-plus-circle'></i> Guardar</button>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>