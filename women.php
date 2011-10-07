<?php
/*
Template Name: Women of Sseko
*/
?>
<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>						
				<?php $womens = getFieldOrder('image'); 
									if(is_array($womens))
									{foreach($womens as $women)
										{echo "<a href='#info$women'class='grid_3 inline'>"; 
										 echo get_image('image',1,$women); 
										 echo "</a>";
										 echo "<div style='display:none'><div id='info$women' class='grid_8'>";
										 echo get_image('image',1,$women); 
										 echo "</div></div>";
										 echo get('from,1,#women');
										}
									}
				?>
		<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
