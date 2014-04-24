<?php
/*
Template Name: Aanbiedingen template
*/
?>
<?php get_header(); ?>

	

 
	<div class="u-gridRow Content-yellow">
		<div class="u-gridContainer">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<?php if(!is_front_page()) { ?>
					<h2><?php the_title(); ?></h2>
					<?php } ?>
					<div class="Aanbiedingen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aanbiedingstartpakket10.png"></img>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aanbiedingstartpakket25.png"></img>

					</div>

					<div class="Aanbiedingen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aanbiedingstartpakket10motor.png"></img>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aanbiedingstartpakket25motor.png"></img>
					</div>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				</article>
			<?php endwhile; endif; ?>
			

<!-- 			<div class="Usp u-gridColumn4 ">
				<p>Nog even de voordelen op een rijtje:</p>
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
			</div> -->

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
