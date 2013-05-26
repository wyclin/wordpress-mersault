<?php
/**
 * @package WordPress
 * @subpackage Manifest
 */

get_header(); ?>




<div id="core-content" class="hfeed">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>





	<div class="navigation">

<!--navigation-->

<?php next_posts_link('<h6>past</h6>'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--navigation center image-->
<?php previous_posts_link('<h6>future</h6>'); ?>
<br /><br /><br /><br />
	</div>

	<?php else : ?>

	<div id="post-0" class="post no-results not-found">
		<h2><?php _e( 'Not Found', 'manifest' ); ?></h2>
		<p><?php _e( "Sorry, but you are looking for something that isn't here.", 'manifest' ); ?></p>
	</div>

	<?php endif; ?>

</div><!-- #core-content -->

<?php get_footer(); ?>