<?php
/**
 * @package WordPress
 * @subpackage Manifest
 */
?>





<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="post-content">
    	<h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>


    <?php if ( 'image' == get_post_format() ) : ?>
	<?php
		$attachments = get_children(
			array(
				'post_parent' => get_the_ID(),
				'post_type' => 'attachment',
				'post_mime_type' => 'image',
				'orderby' => 'menu_order'
			)
		);
		if ( ! is_array($attachments) )
			continue;

		$count = count($attachments);

		$first_attachment = array_shift($attachments);
	?>
		<img class="entry-image" src="<?php echo $first_attachment->guid; ?>?w=700" alt="<?php echo esc_attr( $first_attachment->post_title ); ?>" />
	<?php endif; ?>
    	<div class="entry-content">


			<?php the_content(); ?>


			<?php wp_link_pages( array( 'before' => '<p>' . __( 'Pages:', 'manifest' ), 'after' => '</p>' ) ); ?>
    	</div>
    </div>
</div>