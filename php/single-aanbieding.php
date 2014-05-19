<?php
/*
Template Name: Two column template
*/
?>
<?php get_header(); ?>

<div class="u-gridRow Content-wrap">
		<div class="u-gridContainer">
			<div class="u-gridColumn7">
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
			</div> 

 

				
				<div class="Usp-col u-gridColumn4 ">

			<div>
				<a class="Button Button--registration" href="/aanmelden"><strong>Meld je nu aan</strong></a>
			</div> 
					<!-- <div class="Contactbar-form">
					<?php echo do_shortcode('[gravityform id="1" name="Contact" title="false"]'); ?>
					</div>
				 -->
				<p class="Usp-text">Nog even de voordelen op een rijtje:</p>
				<ul class="Usp-list">
					<li class="icon check"> Hoog slagingspercentage (81%-85 %)</li>
					<li class="icon check"> Hoge mate van kwaliteit</li>
					<li class="icon check"> Maatwerk</li>
					<li class="icon check"> Inzicht in de vorderingen</li>
					<p class="Usp-text">van de cursist</p>
					<li class="icon check"> Goede prijs-kwaliteitsverhouding</li>
					<li class="icon check"> Cursisten krijgen het praktijkboek </li>
				<p class="Usp-text">'Rijopleiding In Stappen'</p>
					<li class="icon check"> Een goede service</li>
				</ul>


			</div>
			
		</div>
	</div>
 
<?php get_footer(); ?>
