<?php 
$user = PacientData::getById($_GET["id"]);
$coverage = CoverageData::getAll();
?>
<div class="row">
  <div class="col-md-2"></div>
	<div class="col-md-8">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Editar datos de Usuario</h4>
      </div>
      <div class="card-content table-responsive">
      	<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatepacient" role="form">

          <div class="form-group">
            <div class="col-md-12">
              <label>Modalidad del Usuario: *</label>           
              <select name="coverage_id" class="form-control" id="coverage_id" value="<?php echo $cat->lastname; ?>" required>
                <?php foreach($coverage as $p):?>
                <option value="<?php echo $p->id; ?>" <?php if($p->id==$user->coverage_id){ echo "selected"; }?>>
                  <?php echo $p->lastname; ?>
                </option>
                <?php endforeach; ?>  
              </select>           
            </div>    
          </div>
 
          
          <div class="form-group">
            <div class="col-md-12">
              <label>Apellido: </label>
              <input type="text" name="lastname" value="<?php echo $user->lastname;?>" required class="form-control" id="lastname">
            </div>
          </div>          
          

          <div class="form-group">
            <div class="col-md-12">
              <label>Nombre: </label>
              <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>N° de Documento: </label>
              <input name="document" value="<?php echo $user->document;?>" required class="form-control" id="document">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Sexo: </label>
              <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox1" name="gender" required <?php if($user->gender=="h"){ echo "checked"; }?> value="h"> Hombre
              </label>
              <label class="checkbox-inline">
              <input type="radio" id="inlineCheckbox2" name="gender" required <?php if($user->gender=="m"){ echo "checked"; }?> value="m"> Mujer
              </label>
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Fecha de Nacimiento: </label>
              <input type="date" name="day_of_birth" class="form-control" value="<?php echo $user->day_of_birth; ?>" id="day_of_birth">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Dirección: </label>
              <input type="text" name="address" value="<?php echo $user->address;?>" class="form-control" required id="address">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Barrio: </label>
              <input type="text" name="neigh" class="form-control" value="<?php echo $user->neigh;?>" id="neigh">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Localidad: </label>
              <input type="text" name="city" class="form-control" value="<?php echo $user->city;?>" id="city">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Correo Electrónico: </label>
              <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" id="email">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Telefono Fijo: </label>
              <input type="text" name="phone"  value="<?php echo $user->phone;?>"  class="form-control" id="phone">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>WhatsApp: *</label>
              <input type="text" name="whatsapp"  value="<?php echo $user->whatsapp;?>"  class="form-control" id="whatsapp">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <label>Link Facebook:</label>
              <input type="text" name="fb" class="form-control" value="<?php echo $user->fb;?>" id="fb">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Link Instagram:</label>
              <input type="text" name="ig" class="form-control" value="<?php echo $user->ig;?>" id="ig">
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-12">
              <label>Link LinkedIn:</label>
              <input type="text" name="lk" class="form-control" value="<?php echo $user->lk;?>" id="lk">
            </div>
          </div>          


          <!--
          <div class="form-group">
            <label for="inputEmail1" class="col-md-4 ">N° Carnet/ Socio:</label>
            <div class="col-md-8">
              <input type="text" name="sick" class="form-control" id="sick" placeholder="Numero de Carnet/Socio" value="<?php echo $user->sick;?>">
            </div>
          </div> -->

          <div class="form-group">
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
              <button type="submit" class="btn btn-success btn-lg btn-block">Guardar</button>
            </div>
          </div>

        </form>
      </div>
    </div>
	</div>
  <div class="col-md-2"></div> 
</div>