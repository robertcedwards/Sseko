<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
 
	<div id="content" class="grid_8">

        <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
 
	<?php if( have_posts() ): ?>
 
        <?php while( have_posts() ): the_post(); ?>
	    <div id="post-<?php get_the_ID(); ?>" <?php post_class('grid_8'); ?>>
 
 
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="entry-meta"><?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?></span>
	        	<hr class="grid_4">
 				<div class="clear"></div>
 
               
 
				<?php the_content(); ?>
  		<span class="comments"><?php comments_popup_link(__('0 comments','example'),__('1 comment','example'),__('% comments','example')); ?></span>
        </div><!-- /#post-<?php get_the_ID(); ?> -->
        <hr class="grid_8">
 		<div class="clear"></div>
        <?php endwhile; ?>

	<?php else: ?>
 
		<div id="post-404" class="noposts">
 
		    <p><?php _e('None found.','example'); ?></p>
 
	    </div><!-- /#post-404 -->
 
	<?php endif; wp_reset_query(); ?>
 
	</div><!-- /#content -->
 	<?php get_sidebar(); ?>
 	
<?php get_footer() ?>