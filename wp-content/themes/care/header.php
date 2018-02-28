<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
.fast {
	-vendor-animation-duration: 1s;
	-vendor-animation-delay: 0s;
}
</style>
<?php wp_head(); ?>
</head>
<body id="page-top" class="index" <?php body_class(); ?>>
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container"> 
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <img src="<?php bloginfo('template_url'); ?>/img/web-img/menuicon.png"/> 
        <!--<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>--> 
      </button>
        <a href="<?php echo home_url(); ?>">
            <?php
            $mob_logo = get_theme_mod('mobile_view_logo');
            if(wp_is_mobile()){ ?>
                <img src="<?php echo $mob_logo; ?>" class="img-responsive main-logo_1 hidden-lg hidden-md hidden-sm">
            <?php } 
            else {
                    $desk_view = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $desk_view , 'full' );
                ?>
                    <img src="<?php echo $image[0]; ?>" class="img-responsive main-logo hidden-xs">
            <?php } ?>    
       </a>
       </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php 
        wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class' => 'top-nav-right nav navbar-nav navbar-right',
                )
        ); 
        ?>      
    </div>
  </div>
</nav>