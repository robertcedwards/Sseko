<?php get_header(); ?>
 
	<div id="content">

 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 		<article <?php post_class('grid_9') ?> id="post-<?php the_ID(); ?>">

            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	        <div class="clear"></div>
			
			<?php the_content(); ?>
			<div id="authorbio"><h2>About the Author</h2><?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
                                <?php echo get_avatar( get_the_author_meta( 'user_email' ), 60 ); ?>
                           
                                <?php the_author_meta( 'description' ); ?>
                                <a href="<?php the_author_meta('user_url' );?>"><?php the_author_meta('user_url' );?><h4>View all posts by <?php the_author(); ?> </h4></a>
                                <h3>Follow <?php the_author(); ?> on twitter</h3>
                                <a href="http://twitter.com/<?php the_author_meta('twitter' );?>"><?php the_author_meta('twitter' );?></a>
                                <?php endif; ?></div>
        	<hr />
 			<div class="clear"></div>
 		</article>
	
	<?php endwhile; endif; ?>

 	<?php get_sidebar(); ?>
 	<?php comments_template(); ?>

<?php get_footer() ?>
</div><!-- /#content  -->
