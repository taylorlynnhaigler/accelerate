
<?php
/*
Template Name: About Page
*/
?>

<?php
/**
 * The template for displaying the about page
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
                <div class="about-banner">
                    <img src="accelerate-theme-child/img/taxi-photo.jpg" alt="Taxi">
                    <p><span class="green">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build business by making our clients visible and making their customers smile.</p>
                </div>

                <div class="about_services"> 
                    <h3>Our Services</h3>
                    <p>We take pride in our clients and the content we create for them. 
                    <br> Here's a brief overview of our offered services.
                    </p>
                </div>
                <div class="about_content">
                    <img src="img/img-content.png" alt="Content Icon">
                    <h2>Content Strategy</h2>
                    <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground rount t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tounge ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
                </div>
                 <div class="about_influencer">
                    <h2>Influencer Mapping</h2>
                    <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground rount t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tounge ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
                    <img src="img/img-influencer.png" alt="Influencer Icon">
                </div>
                <div class="about_social">
                    <img src="img/img-social.png" alt="Social Icon">
                    <h2>Social Media Strategy</h2>
                    <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground rount t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tounge ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
                </div>
                <div class="about_design">
                    <h2>Design & Development</h2>
                    <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground rount t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tounge ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
                    <img src="img/img-design.png" alt="Design Icon">
                </div>
                </div>
               

                    
       


            <?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>