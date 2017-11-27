<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
			<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'biglaketownship' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'biglaketownship' ); ?></p>
					<form method='get' class="navbar-form" action='<?php echo esc_url(home_url('/')); ?>'>
					<label for="navbar-search" class='sr-only'><?php _e('Search', 'textdomain')?></label>
					<div class="form-group">
						<input type="text" class='form-control' name='s' id="navbar-search">
			 
					</div>
					<button type='submit' class='btn btn-primary'><?php _e('Search', 'textdomain')?></button>
				 </form>
				</div><!-- .page-content -->
            </div>
            <div class="col-sm-4">
                <?php if(is_active_sidebar('sidebar')) :?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif;?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>









