<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
            </div>
            <div class="col-sm-4">
                <?php if(is_active_sidebar('sidebar')) :?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif;?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>










