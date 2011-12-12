<?php
/*
Template Name: Full-Time Veterans
*/
?>
<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>"	>
				<?php the_content(); ?>	
				<h1><?php wp_title(' ','true','right'); ?></h1>
				<div id="pagenote" class="flat grid_3">
					<div class="notetext">
						<h2 class="notetitle">Full Time Veterans</h2>
						<p>Our veteran team members work for Sseko full-time, year round. From mothers to managers, read about the dreams each of these women are working towards.</p>
					</div>
					<img class="noteimage" src="/wp-content/themes/Sseko/images/pagenote.jpg">
				</div>	

				<?php $womens = getFieldOrder('image'); 
									if(is_array($womens))
									{foreach($womens as $women)
										{echo "<a rel='women' href='#info$women'class='grid_3 inlineimg'>"; 
										 echo "<div class='womenimg'>";
										 echo get_image('image',1,$women); 
										 echo "</div>";
										 echo "</a>";
										 echo "<div style='display:none'><div id='info$women' class='grid_8 lightbox women container_12'>";
										 echo "<img class='grid_5 right'src='";
										 echo get('image',1,$women);
										 echo "'/>";

										 echo "<div class='grid_6'>";
										 echo get('woman',1,$women);
										 echo "</div><hr>";	
																		 echo "</div></div>";

										}
									}
				?>
		<div class="clear"></div>	
		</article>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
