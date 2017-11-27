<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biglaketownship
 */

?>


<footer>
<div class="">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if(is_active_sidebar('footer-left')) :?>
						<?php dynamic_sidebar('footer-left'); ?>
					<?php endif;?>
				</div>
			<div class="col-md-6">
				<?php if(is_active_sidebar('footer-right')) :?>
                    <?php dynamic_sidebar('footer-right'); ?>
                <?php endif;?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>