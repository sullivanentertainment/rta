<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sullivan_Entertainment
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
    $args = array(
		'post_type' => 'post',
		'posts_per_page' => 1
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
	?>
	<div class="blog-bg" style="width:100vw;height:31vh;background:url('<?php echo get_the_post_thumbnail_url(null, 'full'); ?>');background-repeat:no-repeat;background-size:100% 100%">
		<h2 class="offset-sm-2"><?php the_title(); ?></h2>
  	</div>
    <?php
  }
}
?>
		<hr class="container">
		<h3 class="latest">Latest</h3>
		<section id="blog-wrap" class="container row">

		<?php
				$currentPage = get_query_var('paged'); 
				$args = array(
					'post_type' => 'post',
					'posts_per_page'   => 9,
					'paged' => $currentPage
				);
			

			$post_query = new WP_Query($args);
			if($post_query->have_posts() ) {
				while($post_query->have_posts() ) {
				$post_query->the_post();
				?>
				<div class="blog-item col-sm-4">
					<?php
						$category = get_the_category();
						$firstCategory = $category[0]->cat_name;
					?>
					<p class="cat-name"><?php echo $firstCategory ?></p>
					<a href="<?php echo get_the_permalink()?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					
				</div>
				<?php
			}
			}
		?>
		</section>

		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?>test1</div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?>test2</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
