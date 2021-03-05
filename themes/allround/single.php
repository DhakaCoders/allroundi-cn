<?php 
get_header(); 
while( have_posts()): the_post(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/template', 'breadcrumbs'); ?>
<?php 
 $showhide_sidebar = get_field('sidebarshowhide', $thisID);
  if($showhide_sidebar )
  $fullwidth = ' col-fullwidth';
  else
  $fullwidth = '';
?>
<section class="page-content section-divider">
  <div class="posts-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          <div class="post-sec-cntrl">
            <div class="post-items<?php echo $fullwidth; ?>">
              <article class="post-item clearfix">
                <div class="post-single-des">
                  <h1><?php the_title(); ?></h1>
                  <?php the_content(); ?>
                </div>
              </article>
            </div>    
            <?php if( !$showhide_sidebar ): ?>
            <div class="right-sidebar mgleftm">
              <?php get_sidebar(); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>  
      </div>
    </div>     
  </div><!-- end of .posts-section -->   
</section><!-- end of .main-content -->
<?php endwhile; ?>
<?php get_footer(); ?>