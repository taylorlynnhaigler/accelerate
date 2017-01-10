<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
        </div><!-- #content -->
        </div><!-- #primary -->

                    <div id="four">
                        <div class="map"></div>
                        <div class="whoops"> 
                            <h2><span class="green">Whoops, Took a Wrong Turn...</span></h2>
                            <p class="sorry"> Sorry, this page no longer exists, never existed or has <br>been moved. We feel like complete jerks for totally <br> misleading you.
                            <p class="free">Feel free to taky a long around our <a href="http://localhost:8888/accelerate/case-studies/">blog</a> or some of our <br>featured <a href="http://localhost:8888/accelerate/">work.</a></p>
                        </div>
                    </div>
       
        </div>

             
            

<?php get_footer(); ?>