<?php 
	get_header(); 
	while( have_posts() ): the_post();
	$get_banner = get_field('hmbanner', HOMEID);
	if( $get_banner ):
	$is_video = (!empty($get_banner['mp4_video']) || !empty($get_banner['ogg_video']))? true : false;
?>
<section class="banner-sec">
  	<div class="desktop-bnr-cntrl has-video">
  		<?php if( !empty($get_banner['image']) && !$is_video ): ?>
	    <div class="bnr-img">
	      <?php echo cbv_get_image_tag($get_banner['image']); ?>
	    </div>
		<?php endif; ?>
		<?php if( $is_video ): ?>
	    <div class="bnr-video">
	      <video id="vdo-lg" autoplay >
      	<?php 
	      	if( !empty($get_banner['mp4_video'])) printf('<source src="%s" type="video/mp4">', $get_banner['mp4_video']); 
	      	if( !empty($get_banner['ogg_video'])) printf('<source src="%s" type="video/ogg">', $get_banner['ogg_video']); 
      	?>
	      </video>
	    </div>
	    <?php endif; ?>
  	</div>
  	<div class="mobile-bnr-cntrl has-video">
  		<?php if( !empty($get_banner['image']) && !$is_video ): ?>
	    <div class="bnr-img">
	      <?php echo cbv_get_image_tag($get_banner['image']); ?>
	    </div>
		<?php endif; ?>
		<?php if( $is_video ): ?>
	    <div class="bnr-video">
	      <video id="vdo-lg" autoplay >
		    <?php 
		      	if( !empty($get_banner['mp4_video'])) printf('<source src="%s" type="video/mp4">', $get_banner['mp4_video']); 
		      	if( !empty($get_banner['ogg_video'])) printf('<source src="%s" type="video/ogg">', $get_banner['ogg_video']); 
	      	?>
	      </video>
	    </div> 
	    <?php endif; ?>         
  	</div>
</section>
<?php endif; ?>
<?php get_template_part('templates/template', 'breadcrumbs'); ?>
<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main-cnt-inner">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>    
</section>
<?php endwhile; ?>
<?php get_footer(); ?>