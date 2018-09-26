<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sullivan_Entertainment
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'sullivan-entertainment' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			<div class="category-wrapper container">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<div class="single-cat-wrap row">
					<div class="col-md-6"><a href="<?php echo the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
					<div class="col-md-6">
						<p class="date"><?php echo get_the_date(); ?></p>
						<br/>
						<h2><?php echo the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<a href="<?php echo the_permalink()?>" class="read-more-btn">READ MORE</a>
					</div>
				</div>
	
				<?php

			endwhile;


		endif;
		?>
		</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
