<?php
/**
 * @package WordPress
 * @subpackage Manifest
 */

get_header(); ?>

<div id="core-content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'single' ); ?>


<!--manual like after entry-->
<?php echo do_shortcode('[fb-like-button]'); ?>

<p style="margin-top: 20px;"><i>Thank you for reading my words. Nothing makes me happier than to hear that I have inspired you to do great things. While I have chosen not to enable comments, please don't hesitate to say hello on <a href="http://www.facebook.com/thestrangerblog" target="_blank">Facebook</a> or <a href="http://www.twitter.com/michellelaralin" target="_blank">Twitter</a>. I'd love to hear from you.</i></p>

<br />
		<?php get_related_posts_thumbnails(); ?>
<br />


	<?php comments_template(); ?>

	<div class="navigation">


<?php endwhile; else: ?>

	<p><?php _e( 'Sorry, no posts matched your criteria.', 'manifest' ); ?></p>

<?php endif; ?>

</div>

<?php get_footer(); ?>