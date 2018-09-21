<?php
/*
Template Name: Behind The Scenes
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Edward_Lanto\'s_underscore_theme
*/
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <img style="width:100vw" src="<?php
echo get_template_directory_uri();
?>/static-images/behind-banner.jpg"/>
                <ul id="main-list" class="filtr-container container portfolio-wrapper">
       <h4 class="section-header" style="margin-bottom: 0;
    margin-top: 4%;">Behind The Scenes</h4>
                        <?php
$loop = new WP_Query(array(
    'post_type' => 'videos',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
));
if ($loop->have_posts()):
    while ($loop->have_posts()):
        $loop->the_post();
?>
<li class="video-wrapper">
    <div class="content-wrapper">
        <h3 class="youtube-title"><?php
        echo the_title();
?></h3>
        <p><?php
        echo the_content();
?></p>
    </div>
    <div class="youtube-player" data-id="<?php
        echo CFS()->get('url');
?>"></div>

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
">For an in depth journey through the making of the Anne films look inside the <a href="https://shopatsullivan.com/catalog/product/view/id/2683/s/anne-of-green-gables-limited-edition-blu-ray-collectors-set/category/4/" style="text-decoration:underline;">Blu-ray Collectors Edition</a></p>
                       </ul>
                       <div class="costumes">
                           <h4 class="section-header container costume-head">The Costumes</h4>
                           <ul class="container costume-list">
                               <li>
                                   <img class="costume-img" src="<?php
echo get_template_directory_uri();
?>/static-images/Costume06.jpg"/>
                                   <div class="info">
                                       <p class="info-header">Anne of Green Gables (1985)</p><p style="text-align:center;font-style:italic">Colleen Dewhurst Plays Marilla Cuthbert</p>
                    
                                       <p>★ Costume Designer Martha Mann constructed clothes with fabric placed inside out to help achieve a worn faded look as in this blouse worn by Dewhurst</p>
                                        <p>★ Mann had this sweater handknit for Colleen Dewhurst</p>
                                   </div>
                               </li>
                               <li>
                                   <img class="costume-img" src="<?php
echo get_template_directory_uri();
?>/static-images/Costume01.jpg"/>
                                   <div class="info">
                                       <p class="info-header">Anne of Green Gables: <br/>The Sequel (1987) </p><p style="text-align:center;font-style:italic">Megan Follow Plays Anne Shirley</p>
                    
                                       <p>★ Toronto stage and wardrobe designer Martha Mann created the costumers for the first two films and the fourth film.</p>
                                       <p>★ Mann's design for Anne the Sequel took Megan Follows from being a child to a young ingenue.</p>
                                   </div>
                               </li>
                                <li>
                                   <img class="costume-img" src="<?php
echo get_template_directory_uri();
?>/static-images/Costume02.jpg"/>
                                   <div class="info">
                                       <p class="info-header">Anne of Green Gables: <br/>A New Beginning (2009) </p style="text-align:center"><p style="text-align:center;font-style:italic">Joan Gregson Plays Hepzibah Leach</p>
                    
                                       <p>★ Mann's genius was the amount of research she did to perfect every character's lineup of clothes.</p>
                                   </div>
                               </li>
                                <li>
                                   <img class="costume-img" src="<?php
echo get_template_directory_uri();
?>/static-images/Costume03.jpg"/>
                                   <div class="info">
                                       <p class="info-header">Anne of Green Gables: <br/>The Sequel (1987) </p><p style="text-align:center;font-style:italic">Schuyler Grant Plays Diana Barry</p>
                    
                                       <p>★ Diana's light pink gown with white lace famously known as her “Honeymoon dress" has Gigot sleeves. The bodice and neckline are lined with a long string of white pearls.</p>
                                   </div>
                               </li>
                                <li>
                                   <img class="costume-img" src="<?php
echo get_template_directory_uri();
?>/static-images/Costume04.jpg"/>
                                   <div class="info">
                                       <p class="info-header">Anne of Green Gables: <br/>The Sequel (1987) </p>
                    
                                       <p>★ Martha Mann worked with Cosprop's London design firm to round out many of her wardrobe.</p>
                                       <p>★ Cosprop is famous for supplying period costumes to many of the Merchant Ivory films such as Howard's End and Room with A View.</p>
                                   </div>
                               </li>
                                <li>
                                   <img class="costume-img" src="<?php
echo get_template_directory_uri();
?>/static-images/Costume05.jpg"/>
                                   <div class="info">
                                       <p class="info-header">Anne of Green Gables (1985)</p><p style="text-align:center;font-style:italic;">Charmion King plays Aunt Josephine </p>
                    
                                       <p>★ Mann's clothing designs were based on each character's breakdown. </p>
                                       <p>★ She also influenced hair design and came up with a wig for Actress Charmion King that matched her ferocity as a character.</p>
                                   </div>
                               </li>
                           </ul>
                                                               <p class="quote container">"The period costumes of the Anne films are recognized for their authenticity and intricacy. Martha Mann, the costume designer for the first two films, set an ambitious precedent for the series." </p>
                       </div>
                       <div class="container">
                       <div class="costume-text-1">
                          
                           <div class="before-after-wrapper">
                            <div style="" class="costume-wrap">
                                 <h3 class="section-header" style="margin-top:0">Why These Costumes Matter?</h3>
                           <p>
                            All of Anne Shirley and Marilla Cuthbert‘s costumes were original pieces, constructed specifically for the first film. Mann was faithful to Edwardian styles, right down to the petticoats, furbelows, corsets and more. Ruth Secord took the reigns as costume designer for <a href="https://gazebotv.com/product-detail/23428" target="_blank"><em>Anne: The Continuing Story</em></a>, but stayed true to Mann’s initial vision. Secord used both items that were made specifically for the film, and authentic vintage pieces. Gilbert Blythe‘s costume, for instance, was a genuine medical uniform from the First World War.</p></div>

                                <img src="<?php
echo get_template_directory_uri();
?>/static-images/Why-These-Costumes-Matter.jpg">
                       </div>
                       </div>
                       <div class="costume-text-2">
                          
                           <div class="before-after-wrapper before2">
                              <img src="<?php
echo get_template_directory_uri();
?>/static-images/Martha-Mann.jpg">
                             <div style="">
                             <h3 class="section-header"  style="margin-top:0;">Who is Martha Mann?</h3>
                           <p>
                            Martha Mann returned as costume designer for <a href="https://gazebotv.com/product-detail/23429" targe="_blank"><em>Anne: A New Beginning</em></a>, in order to recreate the tonality of the wardrobe established in the initial trilogy. Mann’s wonderful sense of style and creativity allowed her to craft not only many original designs, but to locate genuine period clothes, and pull many items from stock to create an accurate and rich palette which would accentuate the story.
Thanks to the efforts of Mann and Secord, the lush, visually stimulating costuming of these films will continue to impress for generations to come.</p></div>

                       </div>
                       </div>
                       <div class="set-design container" style="padding:0;">
                           <h4 class="section-header set-header">Set Design</h4>
                           </div>
                            </div>

                          <img class="set-design-bg" style="width:100vw" src="<?php
echo get_template_directory_uri();
?>/static-images/set-design-bg.jpg"/>
                           <div class="container">
                               
                            <div class="before-after-wrapper wrap1">
                            <div class="img-comp-container">
                                <div class="img-comp-img">
                                    <img src="<?php
echo get_template_directory_uri();
?>/static-images/before1.jpg" width="300" height="200">
                                </div>
                                <div class="img-comp-img img-comp-overlay">
                                    <img src="<?php
echo get_template_directory_uri();
?>/static-images/after1.jpg" width="300" height="200">
                                </div>
                            </div>
                            <div class="set-1">
                                <h3 style="margin-top:0;" class="trajan">How'd We Design Two Time Periods?</h3>
                            <p>In order to authentically portray two very distinct periods in <a href="https://gazebotv.com/product-detail/23429" target="_blank"><em>Anne of Green Gables—A New Beginning</em></a>, every set was extensively researched and painstakingly recreated by the Production Designer, Ray Lorenz. Every subtle detail of color, texture and lighting needed to reproduce a visual sweep in time spanning the late 1890’s to the mid 1940’s, where both of Anne’s stories take place. The set design team examined and took into account the differences in trends, resources, technology and historical advancements that shaped each time period in order to assemble and create each required backdrop and setting. The team also had the challenge of recreating the original sets that were used and made iconic in the <a href="https://gazebotv.com/product-detail/34267" target="_blank"><em>Anne of Green Gables trilogy</em></a>; requiring extremely accurate attention to every pre-existing detail; such as the interiors of Green Gables.</p>
                         </div>
                       </div>
                       <div class="before-after-wrapper">
                            <div class="set-bg-2">
                           
                           <h3 class="trajan" style="margin-top:0;">Where Did This All Happen?</h3>
                            <p>Many of the film’s sets were staged and constructed at the Sullivan Studio and Backlot in Toronto, giving the Production Design team a blank canvas to create their vision of the engaging time period of Anne’s youth. Although the film employed a mixture of sets, actual location photography and “blue and green-screen” CGI technology, each visual backdrop had the task of bringing to life two unique eras in history as seamlessly as if the entire film had been shot on location in a real world that sadly no longer exists.</p>
                            </div>
                            <div class="img-comp-container second-slider">
                                <div class="img-comp-img">
                                    <img src="<?php
echo get_template_directory_uri();
?>/static-images/before2.jpg" width="300" height="200">
                                </div>
                                <div class="img-comp-img img-comp-overlay">
                                    <img src="<?php
echo get_template_directory_uri();
?>/static-images/after2.jpg" width="300" height="200">
                                </div>
                            </div>
                       </div>
                        
                       </div>
                       




 

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

