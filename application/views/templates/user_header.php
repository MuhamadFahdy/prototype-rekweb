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


  <div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">
          
            <a class="navbar-brand" href="<?= base_url("user");?>" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/')?>img/techo.png"></a>  
            
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



                <li class="nav-item  ml-md-4">
                  <a class="nav-link" href="<?= base_url('user');?>">Shop</a>
                </li>

                <li class="nav-item  ml-md-4">
                  <a class="nav-link" href="<?= base_url('cart');?>">Cart</a>
                </li>

                <li class="nav-item  ml-md-4">
                  <a class="btn btn-danger" href="<?= base_url('auth/logout   ');?>">Logout</a>
                </li>
                
              </ul>
            </div>
            
          </nav>    
        </div>
      </div>
    </div>
  </div>
  

