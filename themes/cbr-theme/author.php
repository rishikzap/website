<link href="<?php echo get_bloginfo('template_directory'); ?>/author.css" rel="stylesheet">
<?php get_header(); ?>

<?php
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
     
<div class="author-profile-card">
    <h2><?php echo $curauth->display_name; ?></h2>
    <div class="author-photo">
    <?php echo get_avatar( $curauth->user_email , '90 '); ?>
    </div>
    <p><?php echo $curauth->user_description; ?></p>
</div>
     
<h2>Featured</h2>
 
 
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h3>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
<?php the_title(); ?></a>
</h3>
<p class="posted-on">Posted on: <?php the_time('M d, Y'); ?></p>
 
<?php the_excerpt(); ?>
 
<?php endwhile; 
 
// Previous/next page navigation.
the_posts_pagination();
 
 
else: ?>
<p><?php _e('No posts by this author.'); ?></p>
 
<?php endif; ?>

<?php get_footer(); ?>