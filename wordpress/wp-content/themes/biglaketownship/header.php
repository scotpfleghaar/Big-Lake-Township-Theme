<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biglaketownship
 */

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset-"<?php bloginfo('charset'); ?>">
    <title><?php bloginfo( 'name' ); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    <?php wp_head(); ?>
</head>

<body>
<nav class="navbar-default navbar-static-top">
<div class="container">
   
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!-- <a class="navbar-brand" href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a> -->
    
    <a class="navbar-brand" href="<?php bloginfo('url');?>">
            <img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        echo $image[0];
        ?>" alt="" style='height: 100%; object-fit: cover;'>
    </a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?> 
    <form method='get' class="navbar-form navbar-right" action='<?php echo esc_url(home_url('/')); ?>'>
       <label for="navbar-search" class='sr-only'><?php _e('Search', 'textdomain')?></label>
       <div class="form-group">
           <input type="text" class='form-control' name='s' id="navbar-search">

       </div>
       <button type='submit' class='btn btn-primary'><?php _e('Search', 'textdomain')?></button>
    </form>
   
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>