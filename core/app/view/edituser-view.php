<?php $user = UserData::getById($_GET["id"]);?>

<div class="row">
  <div class="col-md-2">    
  </div>
  <div class="col-md-8">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Editar datos de Administrador</h4>
      </div>        
      <div class="card-content table-responsive">
        <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updateuser" role="form">
          <div class="form-group">
            <div class="col-md-12">
              <label>Nombre</label>
              <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <label>Apellido</label>
              <input type="text" name="lastname" value="<?php echo $user->lastname;?>" required class="form-control" id="lastname" placeholder="Apellido">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <label>Nombre de Usuario</label>
              <input type="text" name="username" value="<?php echo $user->username;?>" class="form-control" required id="username" placeholder="Nombre de usuario">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <label>Email</label>
              <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" id="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <label>Contrase&ntilde;a</label>
              <input type="password" name="password" class="form-control" id="inputEmail1" placeholder="Contrase&ntilde;a">
              <p class="help-block">La contrase&ntilde;a solo se modificará si escribes algo, en caso contrario no se modifica.</p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="checkbox">
                <label for="inputEmail1" class="col-md-6" >Esta activo</label>
                <label>
                  <input type="checkbox" class="col-md-6" name="is_active" <?php if($user->is_active){ echo "checked";}?>> 
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="checkbox">
                <label for="inputEmail1" class="col-md-6" >Es administrador</label>
                <label>
                  <input type="checkbox" name="is_admin" class="col-md-6" <?php if($user->is_admin){ echo "checked";}?>> 
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
              <button type="submit" class="btn btn-success btn-block">Actualizar Usuario</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2">    
  </div>    
</div>
