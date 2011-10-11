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
				<h1><?php wp_title(' ','true','right'); ?></h1>						
				<?php $womens = getFieldOrder('image'); 
									if(is_array($womens))
									{foreach($womens as $women)
										{echo "<a href='#info$women'class='grid_3 inline'>"; 
										 echo get_image('image',1,$women); 
										 echo "</a>";
										 echo "<div style='display:none'><div id='info$women' class='grid_8 lightbox women'>";
										 echo "<img class='grid_2'src='";
										 echo get('image',1,$women);
										 echo "'/>";
										 echo "<h3 class='grid_6'><hr>";
										 echo get('name',1,$women);
										 echo "</h3>";	
										 echo "<ul class='grid_6'><li><strong>From:</strong>";
										 echo get('from',1,$women);
										 echo "</li>";
										 echo "<li><strong>Educational Goals:</strong>";
										 echo get('educational_goals',1,$women);
										 echo "</li>";
										 echo "<li><strong>Message to the Sseko Family:</strong>";
										 echo get('message',1,$women);
										 echo "</li>";
										 echo "</ul>";
										 echo "</div></div>";

										}
									}
				?>
		<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
