<?php 
get_header(); 
while( have_posts()): the_post(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/template', 'breadcrumbs'); ?>
<section class="page-content">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-cnt-inner">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endwhile; ?>
<?php get_footer(); ?>