<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- IE Compatbility Meta -->
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<!-- First Mobile Meta -->
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Home</title>
        <!-- My Css Files -->
		<link rel='stylesheet' href='<?php echo base_url();?>front/assets/css/bootstrap.css'>
        <link rel='stylesheet' href='<?php echo base_url();?>front/assets/css/normalize.css'/>
        <link rel='stylesheet' href='<?php echo base_url();?>front/assets/css/style.css'/>
        <link rel='stylesheet' href='<?php echo base_url();?>front/assets/css/default_theme.css'/>
        <!-- Fonts Library -->
        <link rel='stylesheet' href='<?php echo base_url();?>front/https://fonts.googleapis.com/css?family=Open+Sans:400,800'>
        <link rel='stylesheet' href='<?php echo base_url();?>https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,500&subset=latin,latin-ext'>
        <!-- Font Awesome Iconc Library -->
        <link rel='stylesheet' href='<?php echo base_url();?>front/assets/css/font-awesome.min.css'/>
		<!--[if lt IE 9]>
	      <script src="assets/js/html5shiv.min.js"></script>
	      <script src="assets/js/respond.min.js"></script>
   		<![endif]-->
	</head>
	<body>
		<!--START MENU SECTION-->
		<div class="menu">
			<div class="container">
				<div class="menu-section">
					<div class="navbar-header">
					    <a class="navbar-brand" href="<?php echo base_url();?>home"><span class="badge">Perpustakaan</span></a>
					</div>

					<!--START SHOPPING CAT ICON -->
					<div class="shopping-icon">

					 <ul>
						 <?php if ($this->session->userdata('status') == 'login') {?>
 								<li><a href="<?php echo base_url()."login/logout" ?>"><span class="badge"><?php echo "Logout" ?></span></a></li>
 						<?php }else {?>
 						 <li><a href="<?php echo base_url()."login" ?>"><span class="badge">Login</span></a></li>
 					 <?php	} ?>
					 </ul>


							<?php if ($this->session->userdata('status') == 'login') {?>
								<ul>
  								<li><span class="badge"><?php echo "HI...".$this->session->userdata('username')  ?></span></li>
								</ul>
								<!-- <ul>
		 					      	<li><a id="cart"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></a></li>
								</ul> -->
  						<?php }else {?>
  					 <?php	} ?>

					</div>
					<div class="shopping-cart">
						<!--START shopping-cart-header -->
					    <div class="shopping-cart-header">
					        <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
					        <div class="shopping-cart-total">
						        <span class="lighter-text">Total:</span>
						        <span class="main-color-text">$2,229.97</span>
					        </div>
					    </div>
					    <!--END shopping-cart-header -->
					    <ul class="shopping-cart-items">
						    <li class="clearfix">
						        <img src="http://via.placeholder.com/100x100" alt="item1"/>
						        <span class="item-name">Design & Web design</span>
						        <span class="item-price">$849.99</span>
						        <span class="item-quantity">Quantity: 01</span>
						    </li>
						    <li class="clearfix">
						        <img src="http://via.placeholder.com/100x100" alt="item2"/>
						        <span class="item-name">Nature Package</span>
						        <span class="item-price">$1,249.99</span>
						        <span class="item-quantity">Quantity: 01</span>
						    </li>
						    <li class="clearfix">
						        <img src="http://via.placeholder.com/100x100" alt="item3"/>
						        <span class="item-name">Design & Web design</span>
						        <span class="item-price">$129.99</span>
						        <span class="item-quantity">Quantity: 01</span>
						    </li>
					    </ul>
					    <div class="shopping-buttons">
						    <a class="btn btn-lg home-page-view-cart-btn" href="cart.html">view cart</a>
						    <a class="btn btn-lg home-page-checkout-btn" href="checkout.html">Checkout</a>
						</div>
				    </div>
				    <!--END SHOPPING CAT ICON -->
				    <!--START MENU TOGGLE ICON-->
				    <div class="menu-toggle">
					    <div class="one"></div>
					    <div class="two"></div>
					    <div class="three"></div>
				  	</div>
				    <nav>
						<ul class="hidden">
                            <li><a href="<?php echo base_url();?>home">Home</a></li>
                            <li><a href="<?php echo base_url();?>fkategori">Kategori</a></li>
                            <li><a href="<?php echo base_url();?>books">Buku</a></li>
                            <li><a href="<?php echo base_url();?>about">About</a></li>
                        </ul>
					</nav>
					<!--END MENU TOGGLE ICON-->
				</div>
			</div>
		</div>
