<link href="<?php echo get_bloginfo('template_directory'); ?>/after.css" rel="stylesheet">

	<img id="feature-image" src="<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); echo $img[0]; ?>" alt="<?php the_title(); ?>"/>
<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a></p>
	<?php the_content(); ?>
	<div class="tags">
		<?php
			if(get_the_tag_list()) {
    	echo get_the_tag_list('<ul id="horizontal-list" style="list-style-type: none;"><li>#','</li><li>&nbsp;&nbsp;&nbsp;#','</li></ul>');
			}
		?>
	</div>
</div><!-- /.blog-post -->