<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>css/style-tb.css" rel="stylesheet">

  <title>
    <?= $title; ?>
  </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>css/style-tb.css" rel="stylesheet">

</head>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Admin Corner</a>

        <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        
      <li class="nav-item no-arrow">
        <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $user['name'] ?>
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
       <li>
        
        <a class="btn btn-primary" href="<?= base_url('home/index');?>">Logout</a>
      </li>
      </li>
    </ul>

  </nav>
