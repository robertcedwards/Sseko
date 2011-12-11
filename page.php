<?php
/*
Template Name: Seeko Story pages
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post grid_12" id="post-<?php the_ID(); ?>">

			<span id="title"><h2><?php the_title(); ?></h2></span>


			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>


		</article>
		

		<?php endwhile; endif; ?>


<?php get_footer(); ?>
