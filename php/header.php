<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>
 
    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>
	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/fmu6wlr.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">

	<!--AppIon-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png"/>  
    <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png" /> 

	<!--GoogleMaps-->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>




    <!-- Wordpress head function -->
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?> >
	<div id="fb-root"></div>
	<?php include_once('ico/sprites.svg'); ?>
	
	<!-- Navigation -->
	<div class="Navigation-wrap dropdown">
		<div class="u-gridContainer">
			<?php include 'includes/navigation.php'; ?>
			<a class="Navigation-menuToggle" id="js-menuToggle">Menu</a>
			
		</div>
	</div>

	<!-- Logo bar -->
	<div class="u-gridRow">
		<div class="u-gridContainer">
			<div class="Logobar u-cf">
				<div class="Logobar-image u-objLeft">
					<a href="/home/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" /></a>
				</div> 
				<div>
					<a class="Button Button--header" href="/aanmelden"><strong>Meld je nu aan</strong></a>

				</div> 
				<div>
					        
					<a class="Button Button--phone" href="tel:0628408410"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" />Bel ons
					</a>

				</div> 

				<!-- <div>
					<a class="Button Button--cbr" href="tel:0180-394444">06 28408410</a>
				</div>  -->

				<div class="Logobar-social u-objRight">
		          <a href="https://www.facebook.com/rijschool.compleet"><svg class="Icon Icon--standalone" viewBox="0 0 128 128"><use xlink:href="#icon-facebook2"></use></svg></a>
				</div> 
			</div>
		</div>
	</div>
	

	<!-- Slider -->
	<div class="u-u-gridColumn">

		<div class="Slider">

			<!-- http://www.rijschoolgegevens.nl/index.asp?pageid=2&examenplaats=45&automaat=&gemeente=4813 -->
			<ul class="Slider-slider bxslider">		
			<?php
					$args = array(
						'post_type' => 'slider',
					);
					$slider = new WP_Query( $args );
					if( $slider->have_posts() ) {
						while( $slider->have_posts() ) {
							$slider->the_post();
							?>
								<div class="Slider-item">

									<?php the_post_thumbnail(); ?>
									<div class="Slider-slogan">

									<!-- <h5 class="Slider-heading">Hoogste slagingspercentage in de regio!</h5> -->
										<h4 class="Slider-heading">
											<!-- <?php the_title(); ?> -->
											<p class="Slider-text"><?php the_content(); ?></p>
										</h4>
										<h4 class="Slider-heading2">
											<!-- <?php the_title(); ?> -->
											<p class="Slider-text2"><a class="Slider-link" href="http://www.rijschoolgegevens.nl/index.asp?pageid=2&gemeente=4813&examenplaats=45&fromsearch=&automaat=0&sortby=2&sortorder=1">Hoogste slagingspercentage <strong>klik hier</strong></p></a>
										</h4>
									</div>
									<!-- <a class="Button Button--offer" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a> -->
								</div>

							<?php
						}
					}
					else {
						echo '<p>Er zijn momenteel geen aanbiedingen';
					}
				?>
			</div>		
				
			</div>
		</div>
	</div>

	<!-- Welcome -->
	



