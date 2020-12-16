<link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">
<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a></p>

  <?php the_excerpt(); ?>
</div>
<!-- /.blog-post -->