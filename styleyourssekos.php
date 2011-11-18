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
				<div id="note" class="grid_12 last"><p class="note grid_5"><span class="special">Style your Ssekos!</span> There are so many ways to tie your Ssekos. Watch the videos and learn how to style your Ssekos! Then, come up with your own!</p><img src="<?php bloginfo('template_directory'); ?>/images/paper.png"style="float:left;"/><h1><?php wp_title(' ','true','right'); ?></h1></div>					
				<?php $styles = getFieldOrder('image'); 
									if(is_array($styles))
									{foreach($styles as $style)
										{
										 echo "<div class='grid_3'>";
										 echo "<a rel='styles' href='#info$style'class='inlineimg grid_3'>";
										 echo "<img src='";
										 echo get_image('image',1,$style,$tag_img=0);
										 echo "'class='grid_3' title='";
										 echo get('name',1,$style);
										 echo "'alt='";
										 echo get('name',1,$style);
										 echo "'</a>";
										 echo "<h2 class='grid_3'>";
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