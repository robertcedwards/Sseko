<?php
/*
Template Name: Meet the Women
*/
?>
<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>	
				<h1><?php wp_title(' ','true','right'); ?></h1>						
				<img class="grid_4" src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0u.png" alt="" /><img class="grid_4" src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0z.png" alt="" /><img class="grid_4" title="Sseko Graduates" src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0t.png" alt="" /><img class="grid_4" title="Full Time Veteran" src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0s.png" alt="" />
		<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
