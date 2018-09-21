<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sullivan_Entertainment
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<?php wp_head(); ?>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header row">
		<div class="container header-wrap">
			<div class="fade-logos-wrap col-md-2">
				<a href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/static-images/anne-logo-white.png" id="logo-light"/>
					<img src="<?php echo get_template_directory_uri(); ?>/static-images/anne-logo-dark.png" id="logo-dark"/>
				</a>
			</div>
		<nav class="row offset-md-1 col-md-9">
		<div class="dropdown ">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				FILMS
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/films/#anneofgreengables">Anne of Green Gables</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/films/#anneofavonlea">Anne of Avonlea</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/films/#annethecontinuingstory">The Continuing Story</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/films/#anneanewbeginnging">A New Beginning</a>
			</div>
		</div>
		<div class="dropdown ">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				CHARACTERS
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#anne-shirley">Anne Shirley</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#gilbert-blythe">Gilbert Blythe</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#marilla-cuthbert">Marilla Cuthbert</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#matthew-cuthbert">Matthew Cuthbert</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#diana-barry-wright">Diana Barry Wright</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#rachel-lynde">Rachel Lynde</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#morgan-harris">Morgan Harris</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#mrs-harris">Mrs.Harris</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#young-anne-shirley">Young Anne Shirley</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#amelia-thomas">Amelia Thomas</a>
				<a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/characters/#older-anne-shirley">Older Anne Shirley</a>
			</div>
		</div>
		<div>
			<a href="<?php echo get_template_directory_uri(); ?>/behind-the-scenes" class="">BEHIND THE SCENES</a>
		</div>
		<div>
			<a href="https://gazebotv.com/" class="">WATCH NOW</a>
		</div>
		<div>
			<a href="<?php echo get_template_directory_uri(); ?>/blog" class="">BLOG</a>
		</div>
		<div>
			<a href="#" class="">SHOP</a>
		</div>
		</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
