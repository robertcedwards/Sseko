<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
 
	<div id="content">
	<div id="posts" class="grid_9">
        <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
 
	<?php if( have_posts() ): ?>
 
        <?php while( have_posts() ): the_post(); ?>
	    <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
 
 
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="entry-meta"><small>Posted on: <?php the_time('l, F jS, Y') ?> in<?php the_category(', ') ?>.</span>
	        	
 				<div class="clear"></div>
 
               
 
				<?php the_content(); ?>
				<div id="authorbio"><h2>About the Author</h2><?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
                                <?php echo get_avatar( get_the_author_meta( 'user_email' ), 60 ); ?>
                           
                                <?php the_author_meta( 'description' ); ?>
                                <a href="<?php the_author_meta('user_url' );?>"><?php the_author_meta('user_url' );?><h4>View all posts by <?php the_author(); ?> </h4></a>
                                <h3>Follow <?php the_author(); ?> on twitter</h3>
                                <a href="http://twitter.com/<?php the_author_meta('twitter' );?>"><?php the_author_meta('twitter' );?></a>
                                <?php endif; ?></div></br>
  		<span class="comments"><?php comments_popup_link(__('0 comments','example'),__('1 comment','example'),__('% comments','example')); ?></span>
        </div><!-- /#post-<?php get_the_ID(); ?> -->
        <hr class="grid_9"/>
 		<div class="clear"></div>
        <?php endwhile; ?>
        </div>
<?php get_sidebar(); ?>	
<div class="grid_12"style="text-align:center;">
<?php posts_nav_link(' &#183; ', 'previous page', 'next page'); ?>
</div>
	<?php else: ?>
 
		<div id="post-404" class="noposts">
 
		    <p><?php _e('None found.','example'); ?></p>
 
	    </div><!-- /#post-404 -->
 <?php get_sidebar(); ?>	

	<?php endif; wp_reset_query(); ?>
 
<?php get_footer() ?>
</div><!-- /#content -->
