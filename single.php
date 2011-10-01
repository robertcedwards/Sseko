<?php get_header(); ?>
 
	<div id="content" class="grid_8">

 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 		<article <?php post_class('grid_8') ?> id="post-<?php the_ID(); ?>">

            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            	<span class="entry-meta"><?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?></span>
	        	<hr class="grid_4">
	        <div class="clear"></div>
			
			<?php the_content(); ?>
        	<hr class="grid_8">
 			<div class="clear"></div>
 		</article>
	<?php comments_template(); ?>
	
	<?php endwhile; endif; ?>

	</div><!-- /#content  -->
 	<?php get_sidebar(); ?>
 	
<?php get_footer() ?>