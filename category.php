<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sullivan_Entertainment
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
		
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="category-wrapper container">
			<?php 
		
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;
		echo '<h1>' . get_the_category_by_ID($category_id ) . '</h1>';
		?>
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
	</div><!-- #primary -->

<?php
get_footer();
