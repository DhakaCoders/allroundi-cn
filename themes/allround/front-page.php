<?php get_header(); ?>
<section class="banner-sec">
  	<div class="desktop-bnr-cntrl has-video">
	    <div class="bnr-img">
	      <img src="<?php echo THEME_URI; ?>/assets/images/bnr-img.jpg" alt="">
	    </div>
	    <div class="bnr-video">
	      <video id="vdo-lg" autoplay >
	        <source src="<?php echo THEME_URI; ?>/assets/video/Placeholder Video.mp4" type="video/mp4">
	        <source src="<?php echo THEME_URI; ?>/assets/video/Placeholder Video.ogg" type="video/ogg">
	      </video>
	    </div>
  	</div>
  	<div class="mobile-bnr-cntrl has-video">
	    <div class="bnr-img">
	      <img src="<?php echo THEME_URI; ?>/assets/images/bnr-img.jpg" alt="">
	    </div>
	    <div class="bnr-video">
	      <video id="vdo-lg" autoplay >
	        <source src="<?php echo THEME_URI; ?>/assets/video/Placeholder Video.mp4" type="video/mp4">
	        <source src="<?php echo THEME_URI; ?>/assets/video/Placeholder Video.ogg" type="video/ogg">	
	      </video>
	    </div>          
  	</div>
</section>

<section class="breadcumbs">
  	<div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="breadcumbs-inner">
	          <ul class="clearfix reset-list">
	            <li>
	              <a href="#" class="fl-home-icon">
	                <span class="item">home</span>
	              </a>
	            </li>
	            <li>
	              <a href="#">
	                <span class="item">page</span>
	              </a>
	            </li>
	            <li class="active">
	              <a href="#"><span>subpage</span></a>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </div>
  	</div>
</section>
<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main-cnt-inner">
					<h1 class="al-h1">Pagebuilder field here, HTML Title</h1>
					<p>Paragraph text. This is a <strong>Strong text.</strong> This is a <a href="#">link tekst</a></p>
					<ul>
						<li>listings</li>
						<li>listings</li>
						<li>listings</li>
					</ul>
					<ol>
						<li>jadhjad</li>
						<li>jadhjad</li>
						<li>jadhjad</li>
					</ol>
					<h2 class="al-h2">H2 title</h2>
					<h3 class="al-h3">H3 Title</h3>
				</div>
			</div>
		</div>
	</div>    
</section>
<?php get_footer(); ?>