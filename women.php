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
										{echo "<a href='#info'class='grid_3 inline'>"; 
										 echo get_image('image',1,$women); 
										 echo "</a>";
										}
									}
				?>
							 						
							
			<?php $images = getFieldOrder('image'); 
									if(is_array($images))
									{foreach($images as $image)
										{echo "<div style='display:none'><div id='info' class='grid_8'>"
										 echo get_image('image',1,$image); 
										 echo "</div></div>";
										}
									}
				?>
						
                
						
						<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
