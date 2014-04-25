<?php
/*
Template Name: Cadeaubon template
*/
?>
<?php get_header(); ?>

	

 
	<div class="u-gridRow Content-wrap">
		<div class="u-gridContainer">
			<div class="u-gridColumn6">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<?php if(!is_front_page()) { ?>
					<h2><?php the_title(); ?></h2>
					<?php } ?>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>   

				<div class="Offer-item-cadeau">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cadeaubonrijschoolcompleet.jpg" />
				</div>
			

		</div>
	</div>
<!-- 
	<div class="Review">
		<div class="u-gridContainer">
			<h2 class="Review-heading u-sectionHeadingWhite">Recensies</h2>
			<div class="u-gridRow">
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
			</div>
		</div>
	</div> -->




<?php get_footer(); ?>
