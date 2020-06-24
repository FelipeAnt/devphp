<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Charinformation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" type="text/css" href="plugins/mystily.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="proindex.html" class="nav-link">Extra page</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CharInformation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User ADM</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Operações
                <span class="right badge badge-danger">10 abaixo</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Atividade
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="questao1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao4.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 4</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao5.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 5</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao6.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 6</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao7.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 7</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao8.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 8</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao9.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 9</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="questao10.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questão 10</p>
                </a>
              </li>
            </ul>
          </li>        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

        <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
