<link href="<?php echo get_bloginfo('template_directory'); ?>/author.css" rel="stylesheet">
<?php get_header(); ?>
<div class="bg-color">

	<div class="author-page">

		<?php
		// Set the Current Author Variable $curauth
		$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
		?>



		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div id="author-img">
						<?php echo get_avatar( $curauth->user_email , '375 ', '', '', array('class' => array('img-responsive') )); ?>
					</div>
				</div>
				<div class="col-md-6">
					<h2 id="author-name"><?php echo $curauth->display_name; ?></h2>
					<p id="author-descrip"><?php echo $curauth->user_description; ?></p>
				</div>
			</div>
		</div>

		<h2 id="featured">Featured</h2>

		<link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet"> 

		<div class="row">
			<?php if (have_posts()): $counter = 0; ?>
				<?php while (have_posts()): the_post(); $counter++; ?>
					<?php if($counter <= 3): ?>
					<div class="col-md-4">
					<div class="feature">
						<div id="feature-img"><?php echo get_the_post_thumbnail( $page->ID, 'feature-thumbnail' ); ?></div>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
							<h3 class="title"><?php the_title(); ?>
							</h3> </a>
						<div class="excerpt"><?php the_excerpt(); ?></div>
					</div>
					</div>
					<?php endif; ?>
				<?php endwhile; 


			// Previous/next page navigation.
			the_posts_pagination();



			else: ?>
			<p><?php _e('No posts by this author.'); ?></p>

			<?php endif; ?>
		</div>
		
		<h2 id="featured">Articles</h2>
		
		<?php if (have_posts()): $counter = 0; ?>
			<?php while (have_posts()): the_post(); $counter++; ?>
				<?php if($counter > 3): ?>
				<div class="mini">
					<div class="row">
						<div class="col-md-4">
						<div id="article-img"><?php echo get_the_post_thumbnail( $page->ID, 'feature-thumbnail' ); ?></div>
						</div>
						<div class="col-md-8">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
							<h3 class="title"><?php the_title(); ?>
							</h3> </a>
						<div class="excerpt"><?php the_excerpt(); ?></div>
						</div>
						
					</div>
				</div>
				<?php endif; ?>
			<?php endwhile; ?>


		<?php endif; ?>

		<?php get_footer(); ?>
	</div>
</div>