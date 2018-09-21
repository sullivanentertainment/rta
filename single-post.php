<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sullivan_Entertainment
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            	<?php
		while ( have_posts() ) :
            the_post(); ?>
            
            <div class="single-post-wrap container row">
                    <div class="single-post-left col-md-9">
                        <div class="single-blog-meta">
                            <p>By Adriana P.</p>
                            <p>Est. Read Time:</p>
                            <p>Date:<?php echo get_the_date(); ?></p>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <span class="blog-img"><?php the_post_thumbnail(); ?></span>
                        <div class="blog-content"><?php the_content(); ?></div>
                    </div><!--single-post-left-->
                    <div class="single-post-right col-md-3">
                        <h3>Recent Posts</h3>
                        <?php
                            $args = array(
                                'post_type' => 'post'
                            );

                                $post_query = new WP_Query($args);
                            if($post_query->have_posts() ) {
                            while($post_query->have_posts() ) {
                                $post_query->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>">
                                    <p class="recent"><?php the_title(); ?></p>
                                </a>
                                <?php
                            }
                            }
                        ?>
                        <h3>Connect With Us</h3>
                        <div class="social">
                            <div class="row inner-social">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="mail-wrapper">
                            <div class="env-wrap">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <?php
                            echo do_shortcode('[contact-form-7 id="32237" title="Mailing List"]');
                            ?>
                            </div>
                        </div>
                        <a href="#" class="shop-anne-btn">Shop All Anne</a>
                        <div class="categories">
                            <h3>Categories</h3>
                            <?php
                                wp_list_categories(
                                    array(
                                        'title_li' => ''
                                    )
                                );
                            ?>
                        </div>
                    </div><!--single-post-right-->
                </div><!-- single-post-wrap container-->

    

	<?php	endwhile; // End of the loop.
		?>

	           


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();





