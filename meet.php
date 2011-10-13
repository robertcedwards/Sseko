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
				<a class="grid_4 alpha" href="/university-bound" alt="University Bound"><img src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0u.png" alt="University Bound" title="University Bound" /><img class="grid_4" src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0z.png" alt="" /></a>
				<a class="grid_4" href="/veteran"><img title="Full Time Veteran" src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0s.png" alt="Full Time Veterans" title="Full Time Veterans" /><img src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0x.png" alt="" /></a>
				<a class="grid_4 omega" href="/sseko-graduates" alt="Sseko Graduates"><img title="Sseko Graduates" alt="Sseko Graduates" src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0t.png" alt="" /><img src="http://sseko.welovewebsit.es/wp-content/uploads/2011/10/0y.png" alt="" /></a>

		<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
