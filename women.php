<?php
/*
Template Name: Women of Sseko
*/
?>
<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>"	>
				<?php the_content(); ?>	
				<h1><?php wp_title(' ','true','right'); ?></h1>
				<img class="flat grid_3" src="<?php bloginfo('template_directory'); ?>/images/womennote.png"/>
				<?php $womens = getFieldOrder('image'); 
									if(is_array($womens))
									{foreach($womens as $women)
										{echo "<a rel='women' href='#info$women'class='grid_3 inlineimg'>"; 
										 echo get_image('image',1,$women); 
										 echo "</a>";
										 echo "<div style='display:none'><div id='info$women' class='grid_8 lightbox women'>";
										 echo "<img class='grid_2 right'src='";
										 echo get('image',1,$women);
										 echo "'/>";
										 echo "<p class='grid_6'>";
										 echo get('woman',1,$women);
										 echo "</p><hr>";	
																		 echo "</div></div>";

										}
									}
				?>
		<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
