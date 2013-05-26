<?php
/**
 * @package WordPress
 * @subpackage Manifest
 */
?>

<div class="selector">
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php if ( is_sticky() ) : ?>
		<h5 class="post-date"><abbr class="published"><?php _e( 'Featured', 'manifest' ); ?></abbr></h5>
	<?php else : ?>
	<?php endif; ?>

	<div class="post-content">
		<h3 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>



		<div class="entry-content">
			<?php the_content( __( 'Read the full entry &raquo;', 'manifest' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<p>' . __( 'Pages:', 'manifest' ), 'after' => '</p>' ) ); ?>
		</div>
	</div>
	<!-- <div class="post-meta"><div class="comments"></div></div>-->
</div>
</div>