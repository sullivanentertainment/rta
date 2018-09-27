<?php
/**
 * Template Name: Behind The Scenes
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edward_Lanto\'s_underscore_theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		    <img style="width:100vw" src="https://anneofgreengables.com/wp-content/uploads/2018/05/behind-the-scenes.png"/>
                <ul id="main-list" class="filtr-container container portfolio-wrapper">
       <h1 class="section-header" style="margin-bottom: 0;
    margin-top: 20px;">Behind The Scenes</h1>
       
                        <?php
$loop = new WP_Query(array(
	'post_type' => 'videos',
	'posts_per_page' => - 1,
	'orderby' => 'date',
	'order' => 'ASC',
));

if ($loop->have_posts()):
	while ($loop->have_posts()):
		$loop->the_post();
?>
<li class="video-wrapper">
    <div class="content-wrapper">
        <h3 class="youtube-title"><?php
		echo the_title(); ?></h3>
        <p><?php
		echo the_content(); ?></p>
    </div>
    <div class="youtube-player" data-id="<?php
		echo CFS()->get('url'); ?>"></div>

</li>

                                
                            <?php
	endwhile;
endif;
wp_reset_postdata();
?>
<div class="film-wrapper"><button class="read-more">Watch More</button></div>
<p style="
    text-align: center;
    font-weight:bold;
"> For a journey through the making of Road to Avonlea look at the <a href="https://shopatsullivan.com/index.php/catalog/product/view/id/1282/s/an-avonlea-album/category/30/">Avonlea Album</a></p>
                       </ul>
                       
                       <!-- IF ADD COSTUMES BACK ADD HERE -->
                       <div class="container">
                       <div class="costume-text-1">
                          
                           <div class="before-after-wrapper">
                            <div style="flex-basis:47%" class="costume-wrap">
                                 <h3 class="section-header" style="margin-top:0">Imagine</h3>
                          <p class="p-heading">7,000 pairs of shoes</p>
<p>including period skates, slippers, high-button boots and dance wear</p>

<p class="p-heading">10,000 costumes</p>
<p>half of which were original designs for all of the lead performers and guest stars</p>
<p class="p-heading">2,000 hats</p>
<p>with enough feathers, frills and furbelows to exhaust a full-time millinery department.</p>
                          
                          
                          </div>

                                <img src="https://roadtoavonlea.com/wp-content/uploads/2018/06/road-to-avonlea-costume-10-1-1.jpg" alt="Road to Avonlea period drama costume">
                       </div>
                       </div>
                       <div class="costume-text-2">
                          
                           <div class="before-after-wrapper before2">
                              <img style="width:49%;" src="https://roadtoavonlea.com/wp-content/uploads/2018/06/road-to-avonlea-costume-19-3.jpg" alt="Road to Avonlea period drama costumes">
                             <div style="flex-basis:47%">
                           <p>
                            Avonlea scripts presented enormous challenges; and so did the actors who often had much to say about their character development and how it would best be reflected in what they wore.<br/><br/>Most female performers who had been subjected to seven years of authentic corsets and heavy undergarments had no desire to keep them. Souvenirs were the rare costume jewelry, eye wear, head dresses, wigs and fans that had been procured at great expense and sold at the production’s close to enthusiastic memorabilia hunters.</p></div>

                       </div>
                       <h3 style="text-align:center">Costume Design Stills</h3>
                       <?php echo do_shortcode('[rl_gallery id="31531"]'); ?>
                       </div>
                       <div class="set-design container" style="padding:0;">
                           <h4 class="section-header set-header">Set Design</h4>
                           </div>

                          <img class="set-design-bg" style="width:100vw" src="https://roadtoavonlea.com/wp-content/uploads/2018/08/set-design.png"/>
                           <div class="container">
                               
                            <div class="before-after-wrapper wrap1">
                                <img src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/wp-content/uploads/2018/05/road-to-avonlea-set-design-16.jpg" alt="Road to Avonlea set design"/>
                            <div class="set-1">
                                <h3 style="margin-top:0;" class="trajan">THE CHALLENGES</h3>
                            <p>The challenges were often enormous. From a traveling circus to Dickensian back alleys. From a completely snowbound schoolhouse that had to be shot both interior and exterior in winter blizzards, to cricket fields, castles, caves full of bats and ships at sea!</p>
                         </div>
                       </div>
                       <div class="before-after-wrapper">
                            <div class="set-bg-2">
                            <p>Over the course of many, many episodes Sullivan and his team of writers opted to set scripts in other locations as well as Avonlea. The production team was challenged to create a permanent maritime seaport out of the cobblestone streets of a 19th century Toronto distillery.The fashionable private girls attended by Felicity was staged at Penryn Park, an estate in nearby Port Hope, Ontario, The locations grew more lavish, fanciful and complex as the series grew in size, character and scope. Meanwhile, the original interior sets for King Farm, Rose Cottage, the Dale House, the Pettibone House and the General Store were maintained across four sound stages in Sullivan Studios. Even these became crowded with the mammoth completion of two floors, offices, dining room and kitchen of the Edwardian seaside resort – The White Sands. Though Road to Avonlea grew in scale and imagination, it never lost its heart. Thanks to the talented team of designers and set decorators, as well as Sullivan’s production expertise, the show’s unique brand of humour and human drama was allowed to evolve as far as the writers’ imaginations could dream.</p>
                            </div>
                            <img src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/wp-content/uploads/2018/05/road-to-avonlea-set-design-10.jpg" alt="Road to Avonlea set design"/>
                            
                       </div>
                       <h3>Set Design Stills</h3>
                       <?php echo do_shortcode('[rl_gallery id="31540"]'); ?>
                       </div>
                       




 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
