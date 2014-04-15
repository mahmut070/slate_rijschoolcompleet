<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
	
	<!-- Offer -->
	<div class="u-gridRow">
		<div class="Offer">
			<div class="u-gridContainer">

			</div>
		</div>
	</div>



	<div>
		<div>
			<div class="Content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div> 
		</div>
	</div>





<?php get_footer(); ?>
