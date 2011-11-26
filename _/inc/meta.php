<footer class="meta">
	<span class="byline author vcard">
	<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ), 60 ); ?>
	<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="View all posts by <?php echo get_the_author(); ?>"><?php the_author(); ?>
	<?php the_author_meta( 'description' ); ?>
	<a href="<?php the_author_meta('user_url' );?>"><?php the_author_meta('user_url' );?></a>
<?php endif; ?>
	</span>
	<i>on </i> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('l, F j') ?> in</time>
	<i><?php the_category(', ') ?></i>
</footer>