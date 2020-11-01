<div class="blog-post">
	<img id="feature-image" src="<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); echo $img[0]; ?>" alt="<?php the_title(); ?>"/>
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php the_content(); ?>
</div><!-- /.blog-post -->