<?php
/*
Template Name: Style your Ssekos
*/
?>
<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>">
		<img src="images/notepaper.png"style="float:left;"/>
				<?php the_content(); ?>	
				<h1><?php wp_title(' ','true','right'); ?></h1>					
				<?php $styles = getFieldOrder('image'); 
									if(is_array($styles))
									{foreach($styles as $style)
										{
										 echo "<div class='grid_4'>";
										 echo "<a rel='styles' href='#info$style'class='inlineimg'>"; 
										 echo get_image('image',1,$style); 
										 echo "</a>";
										 echo "<h2>";
										 echo get('name',1,$style);
										 echo "</h2></div>";
										 echo "<div style='display:none'><div id='info$style' class='grid_8 lightbox'>";
										 echo get('link',1,$style);
										 echo "</div></div>";

										}
									}
				?>
		<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>