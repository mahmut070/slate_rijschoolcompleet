<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php the_post_thumbnail(); ?>

			</div>
		</article>
		
		<nav>
			<div><?php previous_post_link('&laquo; %link') ?></div>
			<div><?php next_post_link('%link &raquo;') ?></div>
		</nav>


	<?php endwhile; else: ?>

		<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>

<?php get_footer(); ?>
