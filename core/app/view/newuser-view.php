<div class="row">
	<div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Ingresá un nuevo Administrador</h4>
      </div>
      <div class="card-content table-responsive">
    		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=adduser" role="form">
          <p style="text-transform: initial; color: red; padding-left: 30px">* Campos Obligatorios</p>
          <div class="form-group">
            <div class="col-md-12">
              <label>Nombre *</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <label>Apellido *</label>
              <input type="text" name="lastname" required class="form-control" id="lastname">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <label>Correo Eletrónico</label>
              <input type="text" name="email" class="form-control" id="email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <label>Nombre de Usuario *</label>
              <input type="text" name="username" class="form-control" required id="username">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <label>Contraseña *</label>
              <input type="password" name="password" class="form-control" id="inputEmail1" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-6 ">Es administrador</label>
            <div class="col-md-6">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="is_admin"> 
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">
              <button type="submit" class="btn btn-success btn-block"><i class='fa fa-plus-circle'></i> Agregar Usuario</button>
            </div>
          </div>
        </form>
    	</div>
    </div>
  </div>
</div>