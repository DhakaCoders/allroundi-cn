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
<?php 
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $address = get_field('address', 'options');
  $map_url = get_field('map_url', 'options');
  $gmaplink = !empty($map_url)?$map_url: 'javascript:void()';
  $telephone = get_field('telephone', 'options');
  $email = get_field('email', 'options');
?>	
<div class="page-body-cntrl">
<header class="header">
	<div class="container">
    <div class="row">
      	<div class="col-md-12">
	        <div class="header-inr clearfix">
	          <div class="hdr-top">
				<?php 
                  if( !empty( $email ) ) printf('<div class="hdr-mail"><a href="mailto:%s">%s</a></div>', $email, $email);
                ?>
                <?php 
                  if( !empty($telephone) ) printf('<div class="hdr-tel"><a href="tel:%s">%s</a></div>', phone_preg($telephone), $telephone);
                ?>
	          </div>
	          <div class="hdr-btm">
	            <div class="hdr-lft">
	                <?php if( !empty($logo_tag) ): ?>
	                <div class="logo">
		               <a href="<?php echo esc_url(home_url('/')); ?>">
	                    <?php echo $logo_tag; ?>
	                   </a>
	                </div>
	                <?php endif; ?>
	            </div>
	            <div class="mobile-menu">
	              <div class="resmenu">
	                <div class="ressocial">
	                  <?php if( !empty( $telephone ) ): ?>
	                  <div class="resphone res">
	                    <a href="tel:<?php echo phone_preg($telephone); ?>"><img src="<?php echo THEME_URI; ?>/assets/images/moblie-tel.png"></a>
	                  </div>
	                  <?php endif; ?>
	                  <?php if( !empty( $email ) ): ?>
	                  <div class="resphone res">
	                    <a href="mailto:<?php echo $email; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/mobile-mail.png"></a>
	                  </div>
	              	  <?php endif; ?>
	              	  <?php if( !empty( $address ) ): ?>
	                  <div class="resphone res">
	                    <a target="_blank" href="<?php echo $gmaplink; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/mobile-location.png"></a>
	                  </div>
	                  <?php endif; ?>
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
		                <?php 
		                  $mmenuOptions = array( 
		                      'theme_location' => 'cbv_main_menu', 
		                      'menu_class' => 'clearfix reset-list',
		                      'container' => '',
		                      'container_class' => ''
		                    );
		                  wp_nav_menu( $mmenuOptions ); 
		                ?>
		                </nav>
	              	</div>    
	            </div> 
	          </div>
	          	<div class="xs-mobile-menu">
	              	<nav class="main-nav show-sm">
					<?php 
	                  $mmenuOptions = array( 
	                      'theme_location' => 'cbv_main_menu', 
	                      'menu_class' => 'clearfix reset-list',
	                      'container' => '',
	                      'container_class' => ''
	                    );
	                  wp_nav_menu( $mmenuOptions ); 
	                ?>
	              	</nav>
	            </div> 
	        </div>
      	</div>
    </div>
	</div>
</header>