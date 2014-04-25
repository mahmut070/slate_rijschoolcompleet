<?php
/*
Template Name: Aanmelding template
*/ 
?>
<?php get_header(); ?>
	<div class="u-gridRow Content-yellow">
		<div class="u-gridContainer">
				<h2>Aanmeldingsformulier</h2>
				<div class="Registration">
				<?php echo do_shortcode('[gravityform id="2" name="Contact" title="false"]'); ?>
				</div>
				<div class="Usp-col u-gridColumn4 ">
				
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
			</div>
		</div>
	</div>
<?php get_footer(); ?>  
