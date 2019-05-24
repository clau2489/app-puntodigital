<?php $user = CategoryData::getById($_GET["id"]);?>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Editar Curso</h4>
      </div>
      <div class="card-content table-responsive">
        <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatecategory" role="form">
          <div class="form-group">
            <div class="col-md-12">
              <label>Nombre del Curso</label>
              <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name">
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
  <div class="col-md-2"></div>
</div>