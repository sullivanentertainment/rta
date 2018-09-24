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
	<div class="blog-bg">
		<h2>Blog</h2>
	</div>
	<div class="cat-search-wrap row">
	<?php 
		echo get_search_form(); ?>

		<div class="dropdown col-sm-6 cat-dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CATEGORIES
          </button>
          <div class="dropdown-menu col-md-6 text-center" aria-labelledby="dropdownMenuButton">
          <?php
		$categories = get_categories();
		foreach($categories as $category) {
		   echo '<div class="col-md-12"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
		} 
	?>
		</div>
	</div>
       
	
	 </div>
	
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
