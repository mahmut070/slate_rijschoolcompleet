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
	<script type="text/javascript" src="//use.typekit.net/our3dxe.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <!-- Wordpress head function -->
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?> >
	<?php include_once('ico/sprites.svg'); ?>
	
	<!-- Navigation -->
	<div class="Navigation-wrap ">
		<div class="u-gridContainer">
			<?php include 'includes/navigation.php'; ?>
		</div>
	</div>

	<!-- Logo bar -->
	<div class="u-gridRow">
		<div class="u-gridContainer">
			<div class="Logobar u-cf">
				<div class="Logobar-image u-objLeft">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" />
				</div> 
				<div class="Logobar-social u-objRight">
		          <svg class="Icon Icon--standalone" viewBox="0 0 128 128"><use xlink:href="#icon-facebook2"></use></svg>
				</div> 
			</div>
		</div>
	</div>

	<!-- Slider -->
	<div class="u-gridRow">
		<div class="Slider">
			<div class="Slider-frame">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider.jpg" />
				<div class="Slider-slogan">
					<h5 class="Slider-heading">Hoogste slagingspercentage in de regio!</h5>
				</div>
			</div>
		</div>
	</div>

	<!-- Welcome -->
	<div class="u-gridRow">
		<div class="Welcome">
			<h1 class="Welcome-title">Welkom op de website van Rijschool Compleet</h1>
			<p class="Welcome-text">
				Rijschool compleet is een rijschool met 10 jaar ervaring, en rijdt in de omgeving 
				Waddinxveen. <br/> U kunt bij ons terecht voor autorijlessen, autorijlessen met aahangwagen, en motorrijlessen.
			</p>
		</div>
	</div>



