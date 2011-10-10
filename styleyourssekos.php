<?php
/*
Template Name: Style your Ssekos
*/
?>
<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>						
				<?php $styles = getFieldOrder('image'); 
									if(is_array($styles))
									{foreach($styles as $style)
										{
										 echo "<div class='grid_3'>";
										 echo "<h2>";
										 echo get('name',1,$style);
										 echo "</h2>"; 
										 echo "<a href='#info$style'class='inline'>"; 
										 echo get_image('image',1,$style); 
										 echo "</a></div>";
										 echo "<div style='display:none'><div id='info$style' class='grid_8'>";
										 echo get('link',1,$style);
										 echo "</div></div>";

										}
									}
				?>
		<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>