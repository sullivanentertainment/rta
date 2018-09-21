<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sullivan_Entertainment
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
			<h1 class="hN"> 404 error<br/>LOOKS LIKE YOU'VE GOTTEN STUCK IN THE MUD!</h1>

<p class="description">The page you requested was not found! Follow these links to get you back on track!</p>
<a class="btn btn--primary btn--beta btn--large" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home">
	<?php printf( __( '&#8592; Return to the Home Page', 'rosa' ), home_url() ); ?>
</a>
<a style="margin-top:40px" class="btn btn--primary btn--beta btn--large" href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home">
	Check Out Our Shop
</a>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
