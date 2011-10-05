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
										{echo "<a>"; 
										 echo get_image('image',1,$women); 
										 echo "</a>";
										}
									}
								?>
							</ul> 						
						</div>
                
						
						<div class="clear"></div>	
		</article>
	</div>	
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
