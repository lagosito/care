<?php
    /*
        Template Name: Home Page
    */
?>
<?php get_header(); ?>
<!-- Header -->
<style type="text/css">
  .watch-video-btn span.fa-play::before{
    color: <?php the_field('header_icon_color'); ?>;
  }
</style>
<header class="main-header" style="background: url(<?php the_field('background_image'); ?>) center center ">
  <div id="top-gradient-header" class="commen-bg-style"></div>
  <div id="bg-3" class="commen-bg-style hidden-xs hidden-sm"></div>
  <div id="bg-4" class="commen-bg-style"></div>
  <div class="container" id="maincontent" tabindex="-1">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="main-banner-text">
          <p class="small-text"><?php the_field('short_description'); ?></p>
          <h1><?php the_Field('main_content'); ?></h1>
          <div class="watch-video-btn"> <a class="btn icon-btn btn-primary rounded-outline-btn" href="#"> <span class="watch-url"><?php the_field('header_button_title'); ?></span> <span class="glyphicon btn-glyphicon fa <?php the_field('header_button_icon'); ?> img-circle text-primary" style="background-color: <?php the_field('header_icon_background_color'); ?>"></span> </a> </div>
        </div>
      </div>
    </div>
  </div>
<!--prth  </div>-->
</header>

<!-- get-app Section -->
<section id="download-app" class="download-app-bg">
  <div id="bg-1" class="commen-bg-style hidden-xs hidden-sm"> </div>
  <div id="bg-1-1" class="commen-bg-style hidden-xs hidden-sm"> </div>
  <?php  if (have_rows('home_slider')) { ?> <div id="bg-2" class="commen-bg-style "> </div> <?php } ?>
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
                <input type="email" class="form-control input-rounded" placeholder="Email or your number phone" id="email">
                <button type="button" class="rounded-submit-btn" style="background-color:<?php the_field('invite_button_background_color','options'); ?>;"><?php the_field('invite_button_title','options') ?><i class="right-arrow" aria-hidden="true"></i></button>
              </div>
            </form>
          </div>
<!--          <div class="download-third-part">
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
    <?php  if (have_rows('home_slider')) { ?>
    <div class="row for-parent-section">
      <div class="col-lg-12">
        <div class="owl-carousel owl-theme carousel-1 owl-one">
          <!-- New structure -->
          <?php 
            while (have_rows('home_slider')) {
              the_row();
             ?>
          <div class="item">
            <div class="row"> <img class="slider-img-desktop" src="<?php the_sub_field('home_slide_image'); ?>">              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="for-parent-containt tab-1">
                  <h2><?php the_sub_field('home_slide_title'); ?></h2>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
      <?php } ?>
  </div>
</section>
<!--Feature-Section-->

<!-- Feedback section-->
<section class="simple-interface">
  <div id="bg-5" class="commen-bg-style hidden-xs hidden-sm"></div>
  <div id="bg-6" class="commen-bg-style hidden-xs hidden-sm"></div>
  <div class="cus-feedback-slider">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2>Customers feedback</h2>
            <hr class="yellow-hr-2px">
          </div>
          <div class="testimonial-section-one">
            <div class="auto-container">
              <div class="inner-container">
                <div class="carousel-outer">

                  <?php 
                  $posts = get_field('selected_feedback','options');
                  if( $posts ): ?>
                  <div class="pagers-outer">
                    <ul class="testimonial-slider-pager">
                      <?php foreach( $posts as $post): ?>
                          <?php setup_postdata($post); ?>
                      <li class="pager-item">
                        <div class="inner-box">
                            <figure class="author-thumb" style="background-image:url(<?php  ?>)"></figure>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <ul class="testimonial-slider-content">
                      <?php foreach( $posts as $post): ?>
                          <?php setup_postdata($post); ?>
                          <li class="slide-item">
                              <div class="star-box"> <img src="<?php bloginfo('template_url'); ?>/img/web-img/star.png"> </div>
                              <div class="text"><?php the_content(); ?></div>
                              <div class="name-parent"><strong><?php the_title(); ?></strong></div>
                          </li>
                      <?php endforeach; ?>
                  </ul>
                  <div class="styled-dots"></div>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End off Counter section -->
<section id="counter_two" class="counter_two">
  <div class="container">
    <div class="row" >
      <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
        <div id="counter">
          <div class="col-lg-3">
            <div class="counter-section">
              <div class="counter-value" data-count="200" style="color: <?php the_field('counter_color'); ?>;"><?php the_field('home_page_count1'); ?></div>
              <span style="color: <?php the_field('counter_color'); ?>">+</span>
              <hr class="teal-hr-2px" style="border-color: <?php the_field('counter_color'); ?>">
               <p style="color: <?php the_field('counter_color'); ?>;"><?php the_field('home_page_count_title1'); ?></p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="counter-section">
              <div class="counter-value" data-count="115" style="color: <?php the_field('counter_color'); ?>;"><?php the_field('home_page_count2'); ?></div>
              <span style="color: <?php the_field('counter_color'); ?>">+</span>
              <hr class="teal-hr-2px" style="border-color: <?php the_field('counter_color'); ?>">
              <p style="color: <?php the_field('counter_color'); ?>;"><?php the_field('home_page_count_title2'); ?></p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="counter-section">
              <div class="counter-value" data-count="450" style="color: <?php the_field('counter_color'); ?>;"><?php the_field('home_page_count3'); ?></div>
              <span style="color: <?php the_field('counter_color'); ?>">+</span>
              <hr class="teal-hr-2px" style="border-color: <?php the_field('counter_color'); ?>">
              <p style="color: <?php the_field('counter_color'); ?>;"><?php the_field('home_page_count_title3'); ?></p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="counter-section">
              <div class="counter-value" data-count="150" style="color: <?php the_field('counter_color'); ?>;"><?php the_field('home_page_count4'); ?></div>
              <span style="color: <?php the_field('counter_color'); ?>">+</span>
              <hr class="teal-hr-2px" style="border-color: <?php the_field('counter_color'); ?>">
              <p style="color: <?php the_field('counter_color'); ?>;"><?php the_field('home_page_count_title4'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End off row -->
  </div>
</section>
<?php get_footer(); ?>