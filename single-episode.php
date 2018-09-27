<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_ThemeC:\Users\rgajera\Desktop\calculator\index.html
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
        <div>
            <h3 style="text-align: center;
    font-size: 37px;
    margin-bottom: 0;"><?php
echo the_title(); ?></h3>
    <h1><?php
echo CFS()->get('episode_title') ?></h1> 
        </div>
		<?php

while (have_posts()):
	the_post(); ?>
		<div class="ep-sidebar-wrapper">
        <div class="ep-main">
            <div class="ep-img-desc">
    		<span class="ep-img">
    		    <div class="ep-desc"><p style="margin-bottom: 0;
    letter-spacing: 1px;
    font-family: 'trajan-regular-pro';
        font-size: 24px;">Synopsis</p><?php
	echo CFS()->get('description'); ?>
               </div>
    		    <?php $video = CFS()->get('youtube_url'); ?>
    		<?php if(!empty($video)): ?>
    		   <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php
	echo CFS()->get('youtube_url'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	
            <?php else: ?>
            <?php echo the_post_thumbnail(); ?>
            <?php endif ?>
             <div class="film-wrapper read-btn-wrap">
        		<a class="watch-ep-btn" href="<?php
	echo CFS()->get('gazebo_link'); ?>">Watch Online</a></div>
    		</span>
        		
        	</div>
        	<br/>
        	<br/>
        		<div class="ep-content">
        		    <?php
        		    $dropdown =  CFS()->get('drop_down_content'); ?>
        		   <?php if(!empty($dropdown)): ?>
	                    <?php echo $dropdown ?>
	                    <?php else: ?>
	                    <?php echo the_content(); ?>
	               <?php endif ?>
        		</div>
        		<ul class="fan-list">
        		    <?php
	$fields = CFS()->get('fan_facts_list');
	if(!empty($fields)):
	 ?> <p>Fan Facts</p> <?php
	foreach($fields as $field)
		{
		echo '<li class="fan-fact">' . $field['fan_fact'] . '</li>';
		}
	endif

?>
        		</ul>
        		
        <div class="stills-wrap">
            <h4>Episode Stills</h4>
        <?php
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url, 'episode/season-1-episode-1/') !== false)
		{
		echo do_shortcode('[rl_gallery id="30084"]');
		}
	       elseif (strpos($url, 'episode/season-1-episode-2') !== false)
		{
		echo do_shortcode('[rl_gallery id="31573"]');
		}
	    elseif (strpos($url, 'episode/season-1-episode-3') !== false){
	        echo do_shortcode('[rl_gallery id="31574"]');
	    }
	    elseif (strpos($url, 'episode/season-1-episode-4') !== false){
	        echo do_shortcode('[rl_gallery id="31575"]');
	    }
	    elseif (strpos($url, 'episode/season-1-episode-5') !== false){
	        echo do_shortcode('[rl_gallery id="31576"]');
	    }
	    elseif (strpos($url, 'episode/season-1-episode-6') !== false){
	        echo do_shortcode('[rl_gallery id="31577"]');
	    }
	    elseif (strpos($url, 'episode/season-1-episode-7') !== false){
	        echo do_shortcode('[rl_gallery id="31578"]');
	    }elseif (strpos($url, 'episode/season-1-episode-8') !== false){
	        echo do_shortcode('[rl_gallery id="31579"]');
	    }elseif (strpos($url, 'episode/season-1-episode-9') !== false){
	        echo do_shortcode('[rl_gallery id="31580"]');
	    }
	    elseif (strpos($url, 'episode/season-1-episode-10') !== false){
	        echo do_shortcode('[rl_gallery id="31581"]');
	    }
	    elseif (strpos($url, 'episode/season-1-episode-11') !== false){
	        echo do_shortcode('[rl_gallery id="31654"]');
	    }
	    elseif (strpos($url, 'episode/season-1-episode-12') !== false){
	        echo do_shortcode('[rl_gallery id="31651"]');
	    }
	    elseif (strpos($url, 'episode/season-1-episode-13') !== false){
	        echo do_shortcode('[rl_gallery id="30086"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-1') !== false){
	        echo do_shortcode('[rl_gallery id="30086"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-2') !== false){
	        echo do_shortcode('[rl_gallery id="31386"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-3') !== false){
	        echo do_shortcode('[rl_gallery id="31583"]');
	    }elseif (strpos($url, 'episode/season-2-episode-4') !== false){
	        echo do_shortcode('[rl_gallery id="31584"]');
	    }elseif (strpos($url, 'episode/season-2-episode-5') !== false){
	        echo do_shortcode('[rl_gallery id="31585"]');
	    }elseif (strpos($url, 'episode/season-2-episode-6') !== false){
	        echo do_shortcode('[rl_gallery id="31586"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-7') !== false){
	        echo do_shortcode('[rl_gallery id="31587"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-8') !== false){
	        echo do_shortcode('[rl_gallery id="31588"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-9') !== false){
	        echo do_shortcode('[rl_gallery id="31589"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-10') !== false){
	        echo do_shortcode('[rl_gallery id="31590"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-11') !== false){
	        echo do_shortcode('[rl_gallery id="31591"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-12') !== false){
	        echo do_shortcode('[rl_gallery id="31592"]');
	    }
	    elseif (strpos($url, 'episode/season-2-episode-13') !== false){
	        echo do_shortcode('[rl_gallery id="31593"]');
	    }
	    elseif (strpos($url, 'episode/season-3-episode-1') !== false){
	        echo do_shortcode('[rl_gallery id="31655"]');
	    }
	    elseif (strpos($url, 'episode/season-3-episode-2') !== false){
	        echo do_shortcode('[rl_gallery id="31656"]');
	    }
	    elseif (strpos($url, 'episode/season-3-episode-3') !== false){
	        echo do_shortcode('[rl_gallery id="31657"]');
	    }
	    elseif (strpos($url, 'episode/season-3-episode-4') !== false){
	        echo do_shortcode('[rl_gallery id="31658"]');
	    }elseif (strpos($url, 'episode/season-3-episode-5') !== false){
	        echo do_shortcode('[rl_gallery id="31659"]');
	    }
	    elseif (strpos($url, 'episode/season-3-episode-6') !== false){
	        echo do_shortcode('[rl_gallery id="31660"]');
	    }
	    elseif (strpos($url, 'episode/season-3-episode-7') !== false){
	        echo do_shortcode('[rl_gallery id="31661"]');
	    }
	    elseif (strpos($url, 'episode/season-3-episode-8') !== false){
	        echo do_shortcode('[rl_gallery id="31662"]');
	    }
	    elseif (strpos($url, 'episode/season-3-episode-9') !== false){
	        echo do_shortcode('[rl_gallery id="31663"]');
	    }elseif (strpos($url, 'episode/season-3-episode-10') !== false){
	        echo do_shortcode('[rl_gallery id="31664"]');
	    }elseif (strpos($url, 'episode/season-3-episode-11') !== false){
	        echo do_shortcode('[rl_gallery id="31665"]');
	    }elseif (strpos($url, 'episode/season-3-episode-12') !== false){
	        echo do_shortcode('[rl_gallery id="31666"]');
	    }elseif (strpos($url, 'episode/season-3-episode-13') !== false){
	        echo do_shortcode('[rl_gallery id="31667"]');
	    }elseif (strpos($url, 'episode/season-4-episode-1') !== false){
	        echo do_shortcode('[rl_gallery id="31595"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-2') !== false){
	        echo do_shortcode('[rl_gallery id="31596"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-3') !== false){
	        echo do_shortcode('[rl_gallery id="31597"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-4') !== false){
	        echo do_shortcode('[rl_gallery id="31598"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-5') !== false){
	        echo do_shortcode('[rl_gallery id="31599"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-6') !== false){
	        echo do_shortcode('[rl_gallery id="31600"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-7') !== false){
	        echo do_shortcode('[rl_gallery id="31601"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-8') !== false){
	        echo do_shortcode('[rl_gallery id="31603"]');
	    }elseif (strpos($url, 'episode/season-4-episode-9') !== false){
	        echo do_shortcode('[rl_gallery id="31605"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-10') !== false){
	        echo do_shortcode('[rl_gallery id="31606"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-11') !== false){
	        echo do_shortcode('[rl_gallery id="31607"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-12') !== false){
	        echo do_shortcode('[rl_gallery id="31608"]');
	    }
	    elseif (strpos($url, 'episode/season-4-episode-13') !== false){
	        echo do_shortcode('[rl_gallery id="31609"]');
	    }elseif (strpos($url, 'episode/season-5-episode-1') !== false){
	        echo do_shortcode('[rl_gallery id="31610"]');
	    }elseif (strpos($url, 'episode/season-5-episode-2') !== false){
	        echo do_shortcode('[rl_gallery id="31611"]');
	    }elseif (strpos($url, 'episode/season-5-episode-3') !== false){
	        echo do_shortcode('[rl_gallery id="31612"]');
	    }elseif (strpos($url, 'episode/season-5-episode-4') !== false){
	        echo do_shortcode('[rl_gallery id="31613"]');
	    }elseif (strpos($url, 'episode/season-5-episode-5') !== false){
	        echo do_shortcode('[rl_gallery id="31614"]');
	    }
	    elseif (strpos($url, 'episode/season-5-episode-6') !== false){
	        echo do_shortcode('[rl_gallery id="31615"]');
	    }
	    elseif (strpos($url, 'episode/season-5-episode-7') !== false){
	        echo do_shortcode('[rl_gallery id="31616"]');
	    }
	    elseif (strpos($url, 'episode/season-5-episode-8') !== false){
	        echo do_shortcode('[rl_gallery id="31617"]');
	    }
	    elseif (strpos($url, 'episode/season-5-episode-9') !== false){
	        echo do_shortcode('[rl_gallery id="31618"]');
	    }
	    elseif (strpos($url, 'episode/season-5-episode-10') !== false){
	        echo do_shortcode('[rl_gallery id="31619"]');
	    }
	    elseif (strpos($url, 'episode/season-5-episode-11') !== false){
	        echo do_shortcode('[rl_gallery id="31620"]');
	    }
	    elseif (strpos($url, 'episode/season-5-episode-12') !== false){
	        echo do_shortcode('[rl_gallery id="31621"]');
	    }elseif (strpos($url, 'episode/season-5-episode-13') !== false){
	        echo do_shortcode('[rl_gallery id="31622"]');
	    }
	    elseif (strpos($url, 'episode/season-6-episode-1') !== false){
	        echo do_shortcode('[rl_gallery id="31623"]');
	    }
	    elseif (strpos($url, 'episode/season-6-episode-2') !== false){
	        echo do_shortcode('[rl_gallery id="31624"]');
	    }
	    elseif (strpos($url, 'episode/season-6-episode-3') !== false){
	        echo do_shortcode('[rl_gallery id="31625"]');
	    }
	    elseif (strpos($url, 'episode/season-6-episode-4') !== false){
	        echo do_shortcode('[rl_gallery id="31627"]');
	    }elseif (strpos($url, 'episode/season-6-episode-5') !== false){
	        echo do_shortcode('[rl_gallery id="31628"]');
	    }elseif (strpos($url, 'episode/season-6-episode-6') !== false){
	        echo do_shortcode('[rl_gallery id="31629"]');
	    }elseif (strpos($url, 'episode/season-6-episode-7') !== false){
	        echo do_shortcode('[rl_gallery id="31630"]');
	    }elseif (strpos($url, 'episode/season-6-episode-8') !== false){
	        echo do_shortcode('[rl_gallery id="31631"]');
	    }elseif (strpos($url, 'episode/season-6-episode-9') !== false){
	        echo do_shortcode('[rl_gallery id="31632"]');
	    }
	    elseif (strpos($url, 'episode/season-6-episode-10') !== false){
	        echo do_shortcode('[rl_gallery id="31633"]');
	    }
	    elseif (strpos($url, 'episode/season-6-episode-11') !== false){
	        echo do_shortcode('[rl_gallery id="31634"]');
	    }
	    elseif (strpos($url, 'episode/season-6-episode-12') !== false){
	        echo do_shortcode('[rl_gallery id="31635"]');
	    }
	    elseif (strpos($url, 'episode/season-6-episode-13') !== false){
	        echo do_shortcode('[rl_gallery id="31636"]');
	    }
	    elseif (strpos($url, 'episode/season-7-episode-1') !== false){
	        echo do_shortcode('[rl_gallery id="31637"]');
	    }
	    elseif (strpos($url, 'episode/season-7-episode-2') !== false){
	        echo do_shortcode('[rl_gallery id="31638"]');
	    }
	    elseif (strpos($url, 'episode/season-7-episode-3') !== false){
	        echo do_shortcode('[rl_gallery id="31639"]');
	    }elseif (strpos($url, 'episode/season-7-episode-4') !== false){
	        echo do_shortcode('[rl_gallery id="31641"]');
	    }
	    elseif (strpos($url, 'episode/season-7-episode-5') !== false){
	        echo do_shortcode('[rl_gallery id="31642"]');
	    }
	    elseif (strpos($url, 'episode/season-7-episode-6') !== false){
	        echo do_shortcode('[rl_gallery id="31643"]');
	    }
	    elseif (strpos($url, 'episode/season-7-episode-7') !== false){
	        echo do_shortcode('[rl_gallery id="31644"]');
	    }
	    elseif (strpos($url, 'episode/season-7-episode-8') !== false){
	        echo do_shortcode('[rl_gallery id="31645"]');
	    }elseif (strpos($url, 'episode/season-7-episode-9') !== false){
	        echo do_shortcode('[rl_gallery id="31646"]');
	    }elseif (strpos($url, 'episode/season-7-episode-10') !== false){
	        echo do_shortcode('[rl_gallery id="31647"]');
	    }elseif (strpos($url, 'episode/season-7-episode-11') !== false){
	        echo do_shortcode('[rl_gallery id="31648"]');
	    }elseif (strpos($url, 'episode/season-7-episode-12') !== false){
	        echo do_shortcode('[rl_gallery id="31649"]');
	    }elseif (strpos($url, 'episode/season-7-episode-13') !== false){
	        echo do_shortcode('[rl_gallery id="31650"]');
	    }
	  else
		{
		echo '';
		}

?>
         </div>	
    	</div>

    	<aside>
    	    <div class="episode-list">
    	    <p>Episode Guide</p>
    <?php // The Arguments
    
    if(strpos($url,'season-1') !== false){
    	$season = 'season1';
    }elseif(strpos($url,'season-2') !== false){
    	$season = 'season2';
    }elseif(strpos($url,'season-3') !== false){
    	$season = 'season3';
    }elseif(strpos($url,'season-4') !== false){
    	$season = 'season4';
    }elseif(strpos($url,'season-5') !== false){
    	$season = 'season5';
    }elseif(strpos($url,'season-6') !== false){
    	$season = 'season6';
    }elseif(strpos($url,'season-7') !== false){
    	$season = 'season7';
    }elseif(strpos($url,'season-christmas') !== false){
    	$season = 'seasonchristmas';
    }else{
    	$season= '';
    }


	$args = array(
		'post_type' => 'episode',
		'category_name' => $season,
		'order' => 'asc',
		'posts_per_page' => '-1'
	);

	// The Query

	$the_query = new WP_Query($args); ?>
	<ul id="episode-side-list">
        <?php

	// If we have the posts...

	if ($the_query->have_posts()): ?>

        <!-- Start the loop the loop --> 
            <?php
		while ($the_query->have_posts()):
			$the_query->the_post(); ?>

            <li><a href="<?php
			echo the_permalink(); ?>"><?php
			echo the_title() ?> </a></li>
            
            <?php
		endwhile;
	endif; // end of the loop.
	 ?>

        <?php
	wp_reset_postdata(); ?>
	</ul>
	<div class="show-ep-wrapper">
	    <button class="show-episode"></button>
    </div>
        </div>    
        <div class="buy-content">
            <img src="<?php
	echo CFS()->get('product_image'); ?>" class="product-img-side"/>
            <div class="film-wrapper">
                <a href="<?php
	echo CFS()->get('product_url'); ?>"  style="font-family:'Arial'; font-size:16px;">BUY NOW</a>
            </div>
            <span style="margin-top: 35px;
    display: inline-block;"><?php
	echo CFS()->get('sidebar_description'); ?></span>
        </div>
        <div class="credits">
        <?php
        $fields = CFS()->get('credits');
        if(!empty($fields)): ?>
        
      
            <p>Credits</p>
            <ul class="credit-list">
        		    <?php

	foreach($fields as $field)
		{
		echo '<li class="fan-fact">' . $field['credit_name'] . '</li>';
		}

?>
        		</ul>
       <?php endif ?>     
        </div>
    	</aside>
<?php
endwhile; // End of the loop.
 ?>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>
