<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biglaketownship
 */

get_header(); ?>

<div class="single-cover fill" style="background-image: url('<?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail_url();
                } 
                ?>');">
        <div class="container">
			<div class="row single-jumbotron">
				<div class="col-sm-12">
					<h1><?php wp_title($sep = ''); ?></h1>
				</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                        <?php the_content(); ?> <!-- Page Content -->
                <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
            </div>
            <div class="col-sm-4">
                <?php if(is_active_sidebar('sidebar')) :?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif;?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>