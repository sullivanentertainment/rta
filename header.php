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
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<?php wp_head(); ?>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header row">

<nav class="navbar navbar-expand-lg navbar-light container">
<div class="fade-logos-wrap">
				<a href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/static-images/rta-logo.png" id="logo-light"/>
					<img src="<?php echo get_template_directory_uri(); ?>/static-images/rta-logo-dark.png" id="logo-dark"/>
				</a>
	</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse offset-md-2" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <div class="dropdown ">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            FILMS
          </button>
          <div class="dropdown-menu col-md-12" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/season-1">Season 1</a>
            <a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/season-2">Season 2</a>
            <a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/season-3">Season 3</a>
            <a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/season-4">Season 4</a>
            <a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/season-5">Season 5</a>
            <a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/season-6">Season 6</a>
            <a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/season-7">Season 7</a>
            <a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/christmas">Christmas</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
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
      </li>
      <li class="nav-item">
        <a href="<?php echo get_template_directory_uri(); ?>/behind-the-scenes" class="">BEHIND THE SCENES</a>
      </li>
      <li class="nav-item">
        <a href="https://gazebotv.com/" class="">WATCH NOW</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo get_template_directory_uri(); ?>/blog" class="">BLOG</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo get_template_directory_uri(); ?>/anne/?s=recipes" class="">RECIPES</a>
      </li>
      <li class="nav-item">
        <a href="#" class="">SHOP</a>
      </li>
    </ul>
  </div>
</nav>


		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
