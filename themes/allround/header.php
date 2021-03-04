<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
<?php } ?>
<!-- google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->	
<?php wp_head(); ?>
</head>
</head>
<body <?php body_class(); ?>>
<div class="page-body-cntrl">
<header class="header">
	<div class="container">
    <div class="row">
      	<div class="col-md-12">
	        <div class="header-inr clearfix">
	          <div class="hdr-top">
	            <div class="hdr-mail">
	              <a href="mailto:info@domeinnaam.nl">info@domeinnaam.nl</a>
	            </div>
	            <div class="hdr-tel">
	              <a href="tel:0599123456"> 0599 123 456</a>
	            </div>
	          </div>
	          <div class="hdr-btm">
	            <div class="hdr-lft">
	              <div class="logo">
	                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-logo.png"></a>
	              </div>
	            </div>
	            <div class="mobile-menu">
	              <div class="resmenu">
	                <div class="ressocial">
	                  <div class="resphone res">
	                    <a href="tel:06 121 44 233"><img src="<?php echo THEME_URI; ?>/assets/images/moblie-tel.png"></a>
	                  </div>
	                  <div class="resphone res">
	                    <a href="tel:06 121 44 233"><img src="<?php echo THEME_URI; ?>/assets/images/mobile-mail.png"></a>
	                  </div>
	                  <div class="resphone res">
	                    <a href="tel:06 121 44 233"><img src="<?php echo THEME_URI; ?>/assets/images/mobile-location.png"></a>
	                  </div>
	                </div>
	                <div class="resnavbar">
	                  <div class="resmenubar">
	                    <div class="menuleft">
	                      <span>MENU</span>
	                    </div>
	                    <div class="hamburger-btn">
	                      <span></span>
	                      <span></span>
	                      <span></span>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="hdr-rgt">
	              	<div class="desktop-menu">
		                <nav class="main-nav">
			                  <ul class="clearfix reset-list">
			                    <li class="current-menu-item"><a href="#">home</a></li>
			                    <li><a href="#">over ons</a></li>
			                    <li class="menu-item-has-children">
			                      <a href="#">dropdown</a>
			                      <ul class="clearfix reset-list sub-menu">
			                        <li><a href="#">menu item 1</a></li>
			                        <li><a href="#">menu item 2</a></li>
			                        <li><a href="#">menu item 3</a></li>
			                      </ul>
			                    </li>
			                    <li><a href="#">werkwijze</a></li>
			                    <li><a href="#">blog</a></li>
			                    <li><a href="#">contact</a></li>
			                  </ul>
		                </nav>
	              	</div>    
	            </div> 
	          </div>
	          	<div class="xs-mobile-menu">
	              	<nav class="main-nav">
		                <ul class="clearfix reset-list">
		                  <li><a href="#">home</a></li>
		                  <li><a href="#">over ons</a></li>
		                  <li class="menu-item-has-children">
		                      <a href="#">dropdown</a>
		                      <ul class="clearfix reset-list sub-menu">
		                    <li><a href="#">menu item 1</a></li>
		                    <li><a href="#">menu item 2</a></li>
		                    <li><a href="#">menu item 3</a></li>
		                  </ul>
		                  </li>
		                  <li><a href="#">werkwijze</a></li>
		                  <li><a href="#">blog</a></li>
		                  <li><a href="#">contact</a></li>
		                </ul>
	              	</nav>
	            </div> 
	        </div>
      	</div>
    </div>
	</div>
</header>