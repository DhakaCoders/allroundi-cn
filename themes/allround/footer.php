<?php 
  $logoObj = get_field('ftlogo', 'options');
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
  $copyright_text = get_field('copyright_text', 'options');
?>
</div>
<footer class="footer-wrp">
  <div class="ftr-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-top-cntrl">
            <?php if( !empty( $logo_tag ) ) :?>
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <?php endif; ?>                     
            <div class="ftr-top-btm-cntrl">
              <div class="ftr-contact">
                <?php if( !empty($address) ): ?>
                <div class="ftr-col-1">
	                <div class="ftr-adres">
	                  <span>adres:</span>
	                  <a href="<?php echo $gmaplink; ?>"><?php echo $address; ?></a>              
	                </div>
                </div>
                <?php endif; ?>
                <div class="ftr-col-2">
                  <?php if( !empty($telephone) ): ?>
                  <div class="ftr-tel">
                    <span>tel:</span>
                    <a href="tel:<?php echo phone_preg($telephone); ?>"><?php echo $telephone; ?></a>                  
                  </div>
                  <?php endif; ?>
                  <?php if( !empty($email) ): ?>
                  <div class="ftr-mail">
                    <span>e-mail:</span>
                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                  </div>
                  <?php endif; ?>
                </div>  
              </div>
              <div class="ftr-menu">
                <?php 
                  wp_nav_menu( array(
                  'menu_class'     => 'clearfix reset-list',
                  'theme_location' => 'cbv_footer_menu',
                  'container' => false,
                  ) );
                ?>
              </div>
            </div>
          </div>            
        </div> 
      </div>
    </div>
  </div>
<div class="page-body-cntrl">  
  <div class="ftr-btm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="copyright">
              <?php if( !empty($copyright_text) ) printf('%s', $copyright_text); ?>
            </div>
        </div>
      </div>
    </div>
  </div> 
</div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>