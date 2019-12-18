<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
    <?= $title; ?>
  </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>css/style-tb.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>css/style.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>css/header.css" rel="stylesheet">

</head>

 -->
<body class="hero-anime"> 

  <div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">
          
            <a class="navbar-brand" href="https://themeforest.net/user/ig_design/portfolio" target="_blank"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/logo.svg" alt=""></a>  
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto py-4 py-md-0">
              <div class="navbar">
                  <ul class="nav navbar-nav navbar-left">
                    <li>
                      <?php
                        $cart = 'Shopping Cart: '.$this->cart->total_items(). ' items '?>
                      <?php echo anchor('cart/detail_cart', $cart)  ?>
                    </li>
                  </ul>
                </div>
                <!-- search -->
                <li>
                  <form  action="" method="post">
                    <input type="text" class="form-control" placeholder="Cari Data Barang" name="keyword">
                  </form>
                  <!-- end search  -->
                </li>
                <li class="nav-item  ml-md-4 active">
                  <a class="nav-link" href="<?= base_url("");?>" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>

           <div class="dropdown ml-1 mr-1">
              <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url("laps");?>">Action</a>
                <a class="dropdown-item" href="<?= base_url("shop");?>">Another action</a>
                <a class="dropdown-item" href="<?= base_url("shop");?>">Something else here</a>
              </div>
            </div>
<!-- 
                <li class="nav-item  ml-md-4">
                  <a class="nav-link" href="<?= base_url("shop");?>">Shop</a>
                </li> -->

                <li class="nav-item  ml-md-4">
                  <a class="nav-link" href="<?= base_url("cart");?>">Cart</a>
                </li>
                <li class="nav-item  ml-md-4">
                  <a class="nav-link" href="<?= base_url("auth");?>">Login</a>
                </li>
                <li class="nav-item  ml-md-4">
                  <a class="nav-link" href="<?= base_url("about");?>">About</a>
                </li>
                
              </ul>
            </div>
            
          </nav>    
        </div>
      </div>
    </div>
  </div>
  

</body>