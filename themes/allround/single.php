<?php 
get_header(); 
while( have_posts()): the_post(); 
	$thisID = get_the_ID();
?>
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
                <div class="post-des">
                  <h4><?php the_title(); ?></h4>
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