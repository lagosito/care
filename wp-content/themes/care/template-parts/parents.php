<?
    /*
        Template Name: Parents Page
    */
?>
<?php get_header(); ?>
<!-- Header -->
<header class="main-header parent" style="background: url(<?php the_field('background_image'); ?>) center center no-repeat">
  <div id="top-gradient-header1" class="commen-bg-style"></div>
  <div id="bg-3" class="commen-bg-style hidden-xs hidden-sm"></div>
  <div id="bg-4" class="commen-bg-style"></div>
  <div class="container" id="maincontent" tabindex="-1">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="main-banner-text">
          <p class="small-text"><?php the_field('short_description'); ?></p>
          <h1><?php the_Field('main_content'); ?></h1>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>

<!-- get-app Section -->
<section id="daycare-center" class="daycare-center"> 
  <!--  <div id="bg-1" class="commen-bg-style hidden-xs hidden-sm"> </div>-->
  <div id="bg-1-2" class="commen-bg-style hidden-xs hidden-sm"> </div>
  <div id="bg-2-1" class="commen-bg-style" style="background-image: url(<?php the_field('features_parents_background_image'); ?>);"> </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="get-app-containt-area left-bg">
          <div class="download-first-part">
            <h2><?php the_field('parents_page_title'); ?></h2>
            <hr class="yellow-hr-2px">
            <?php the_field('parents_page_description'); ?>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-12 center-button">
        <button type="button" class="rounded-getnow-btn " style="background-color: <?php the_field('parents_graphical_button_background_color'); ?>"><?php the_field('parents_graphical_button_title'); ?><i class="fa <?php the_field('parents_graphical_button_icon'); ?>" aria-hidden="true"></i></button>
<!--    ####Learn More Button    
        <button type="button" class="rounded-learnmore-btn "><?php //the_field('parents_plain_button_title'); ?></button>-->
      </div>
    </div>
    <div class="row for-parent-section">
      <div class="col-xs-12">
        <div class="section-title text-center">
          <h2><?php the_field('parents_feature_title'); ?></h2>
        </div>
      </div>
      <div class="row">
          <?php
            if(have_rows('features_parents')):
                while (have_rows('features_parents')):
                    the_row();
          ?> 
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">  
          <div class=" features-parents-mid-section">
            <div class="bulb-center">
              <div class="border-icon"> <span class="<?php the_sub_field('features_parents_icon'); ?>"></span> </div>
            </div>
            <div class="feature-text-center">
              <h5><?php the_sub_field('parents_name'); ?>:</h5>
              <p><?php the_sub_Field('parents_description'); ?></p>
            </div>
          </div>
        </div>  
          <?php 
                endwhile;
            endif;
          ?>  
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>
<section id="download-app" class="download-app-bg get-care">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="get-app-containt-area left-bg">
          <div class="download-first-part">
<!--            <p class="small-title">Download</p>-->
            <h2><?php the_field('download_title',"options"); ?></h2>
          </div>
          <div class="download-second-part">
            <form>
              <div class="form-group">
                <input type="email" class="form-control input-rounded" placeholder="<?php the_field('subscribe_placeholder','options'); ?>" id="email">
                <button type="button" class="rounded-submit-btn" style="background-color: <?php the_field('invite_button_background_color','options'); ?>;"><?php the_field('invite_button_title','options'); ?><i class="fa <?php the_field('invite_button_icon','options'); ?>" aria-hidden="true"></i></button>
              </div>
            </form>
          </div>
<!--          
            ####App download section Subscription area
            <div class="download-third-part">
            <p class="small-title">or Download From</p>
          </div>-->
<!--          <div class="download-forth-part">
            <div class="apple-btn-area"> <a class="btn btn-lg btn-success big-btn apple-btn" href="<?php //the_field('app_store_link',"options"); ?>"> <i class="fa fa-apple pull-left" aria-hidden="true"></i>
              <div class="btn-text"><small>Download on the</small><br>
                <strong>App Store</strong></div>
              </a> </div>
            <div class="playstore-btn-area"> <a class="btn btn-lg btn-success big-btn android-btn" href="<?php //the_field('google_play_store_link',"options"); ?>"> <img class="pull-left" src="<?php bloginfo('template_url'); ?>/img/web-img/google_play_04.png">
              <div class="btn-text"><small>Available on</small><br>
                <strong>Google Play</strong></div>
              </a> </div>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="simple-interface-slider">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><?php the_field('parents_simple_interface'); ?></h2>
          <hr class="yellow-hr-2px">
        </div>
      </div>
    </div>
  </div>
  <div class="simple-interface-slider">
    <div class="screen-shold">
      <div class="screen-slider">
          <?php
            if(have_rows('simple_interface')):
                while (have_rows('simple_interface')):
                    the_row(); 
            $img_src = wp_get_attachment_image_src( get_sub_field('simple_interface_image'), 'mobilescreen-thumbnails');
            ?>
            <div class="slide"> <img src="<?php echo $img_src[0]; ?>" alt="images" class="img-responsive"> </div>
            <?php    endwhile;
            endif;
          ?>
      </div>
      <div class="cover"> <img src="<?php the_field('simple_interface_cover_image'); ?>" alt="images" class="img-responsive"> </div>
    </div>
  </div>
  </div>
</section>
<!-- End off Counter section -->
<?php get_footer(); ?>