<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>						
						<div class="container_12">
						<div class="flexslider grid_9">
							<ul class="slides">
								<?php $images = getFieldOrder('slider_image'); 
									if(is_array($images))
									{foreach($images as $image)
										{echo "<li>"; 
										 echo get_image('slider_image',1,$image); 
										 echo "</li>";
										}
									}
								?>
							</ul> 						
						</div>
                
						<div class="flexbuttons grid_2">
							<ul>
								<li class="buttons"><a href="<?php echo get('slider_button_link',1,1); ?>"><?php echo get('slider_button',1,1); ?></a></li>
								<li class="buttons"><a href="<?php echo get('slider_button_link',1,2); ?>"><?php echo get('slider_button',1,2); ?></a></li>

							</ul> 						
						</div>
						<div class="grid_12">
							<ul class="minifeatured">
								<li class="grid_3 mini"><a href="<?php echo get('mini_featured_link',1,1); ?>"><img src="<?php echo get('mini_featured_image',1,1); ?>"/></a></li>
								<li class="grid_3 mini"><a href="<?php echo get('mini_featured_link',1,2); ?>"><img src="<?php echo get('mini_featured_image',1,2); ?>"/></a></li>
								<li class="grid_3 mini"><a href="<?php echo get('mini_featured_link',1,3); ?>"><img src="<?php echo get('mini_featured_image',1,3); ?>"/></a></li>

							</ul>
						</div>

						</div>
		</article>

		<?php endwhile; endif; ?>
<?php get_footer(); ?>
