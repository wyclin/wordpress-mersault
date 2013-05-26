<?php
/**
 * @package WordPress
 * @subpackage Manifest
 */

get_header(); ?>

<div id="core-content">

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="post hentry single" id="post-<?php the_ID(); ?>">
		<div class="post-content">
			<h3 class="entry-title" style="margin-top:-30px;"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<div class="entry-content">
				<?php the_content( '<p class="serif">' . __( 'Read the rest of this entry &raquo;', 'manifest' ) . '</p>' ); ?>
			</div>
		</div>

	<?php comments_template(); ?>
<br /><br />


 	</div>


	<?php endwhile; ?>


</div><!-- #core-content -->

<?php get_footer(); ?>