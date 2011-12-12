<?php
/*
Template Name: University Bound
*/
?>
<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>"	>
				<?php the_content(); ?>	
				<h1><?php wp_title(' ','true','right'); ?></h1>
				<p></p>
				<div id="pagenote" class="flat grid_3">
					<div class="notetext">
						<h2 class="notetitle">University Bound</h2>
						<p>Our university bound team members have recently graduated high school and work with us during the 9 months in between high school and university to earn money towards college.</p>
					</div>
					<img class="special" src="/wp-content/themes/Sseko/images/pagenote.jpg">

				</div>
				<?php $womens = getFieldOrder('image'); 
									if(is_array($womens))
									{foreach($womens as $women)
										{echo "<a rel='women' href='#info$women'class='grid_3 inlineimg'>"; 
										 echo get_image('image',1,$women); 
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
