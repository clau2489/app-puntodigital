<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Punto Digital</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <link rel="shortcut icon" href="img/pd.png" type="image/x-icon">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>  
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
  <link href='assets/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
  <link href='assets/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='assets/fullcalendar/moment.min.js'></script>
  <script src='assets/fullcalendar/fullcalendar.min.js'></script>
  <?php endif; ?>
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
  <script src="assets/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
  <script>
    function printDiv(divName) {
       var printContents = document.getElementById(divName).innerHTML;
       var originalContents = document.body.innerHTML;
       document.body.innerHTML = printContents;
       window.print();
       document.body.innerHTML = originalContents;
  }
  </script> 
</head>

<body>
<?php if(isset($_SESSION["user_id"])):?>
  <div class="wrapper">
    <div class="sidebar" data-color="blue">
      <br>
      <br>      
      <div class="sidebar-wrapper">
        <div class="text-center">
          <img src="img/pd.png" style="width: 60%">
        </div>
        <ul class="nav">
            
            <li class="">
                <a href="./">
                    <i class="fa fa-home"></i>
                    <p>Inicio</p>
                </a>
            </li>
            <li>
                <a href="./?view=reservations">
                    <i class="fa fa-user-plus"></i>
                    <p>Generar Inscripción</p>
                </a>
            </li>
            <li>
                <a href="./?view=pacients">
                    <i class="fa fa-users"></i>
                    <p>Lista de Usuarios</p>
                </a>
            </li>
            <li>
                <a href="./?view=coverages">
                    <i class="fa fa-th-list"></i>
                    <p>Categorías de Usuarios</p>
                </a>
            </li>            
            <li>
                <a href="./?view=medics">
                  <i class="fa fa-graduation-cap"></i>
                  <p>Actividades</p>   
                </a>
            </li>

            <li>
                <a href="./?view=categories">
                    <i class="fa fa-bookmark"></i>
                    <p>Lista de Cursos</p>
                </a>
            </li>
            <!--
            <li>
                <a href="./?view=reports">
                    <i class="fa fa-area-chart"></i>
                    <p>Reportes</p>
                </a>
            </li> -->
            <li>
                <a href="./?view=users">
                    <i class="fa fa-user"></i>
                    <p>Administradores</p>
                </a>
            </li>
          
             <li>
                <a href="logout.php">
                    <i class="fa fa-power-off"></i>
                    <p>Cerrar Sesión</p>
                </a>
            </li>            
        </ul>
      </div>
    </div>
    <div  id="printableArea" class="main-panel">
      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"><b></b></a>
          </div>
          <div class="collapse navbar-collapse">
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="container-fluid">
          <?php 
            View::load("login");
          ?>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <p class="copyright pull-right">Aplicación Web creada por     
            <a href="http://www.oestedev.com" target="_blank"><img style="width: 60px" src="img/oestedev.png">  </a>
          </p>
        </div>
      </footer>      
    </div>
  </div>
    <?php else:?>
      <?php 
      View::load("login");

    ?>

    <?php endif;?>
</body>

  <!--   Core JS Files   -->
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/material.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="assets/js/bootstrap-notify.js"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Material Dashboard javascript methods -->
  <script src="assets/js/material-dashboard.js"></script>

  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){

      // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

      });
  </script>

</html>