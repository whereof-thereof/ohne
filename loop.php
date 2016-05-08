<?php if (have_posts()): ?>
	<ul class="looplist">
	<?php while (have_posts()) : the_post(); ?>
		<li><span class="date"><?php the_time('M Y'); ?></span>&nbsp;&nbsp;<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	</ul>

<?php else: ?>
	<h3><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h3>
<?php endif; ?>
