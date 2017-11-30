<?php
/*
Template Name: Contact-page
*/
?>


<?php get_header(); ?>


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
            <div class="col-sm-6 col-sm-offset-1">
            <?php
            // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                        <?php the_content(); ?> <!-- Page Content -->
                <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
            <form class="form-horizontal">
                    <div class="form-group ">
                      <label for="exampleInputName2">Name</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputPhone">Phone</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="555-555-5555">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">Your Message</label>
                        <textarea  class="form-control" placeholder="Description"></textarea> 
                    </div>
                
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </form>
            </div>
            <div class="col-sm-4">
                <?php if(is_active_sidebar('sidebar')) :?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif;?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>