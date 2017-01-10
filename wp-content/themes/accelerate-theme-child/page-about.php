
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
    <section class="about-page">
        <h2><span class="green">Accelerate</span> is a strategy and marketing agency <br>
            located in the heart of NYC. Our goal is to build <br>
            business by making our clients visible and <br>
            making their customers smile.</h2>
    </section><!-- .about-page -->

    <div id="primary" class="site-content">
        <div id="content" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <div class="about_services"> 
                    <h3>Our Services</h3>
                    <p>We take pride in our clients and the content we create for them. 
                    <br> Here's a brief overview of our offered services.
                    </p>
                </div>

                <div class="about_content">
                    <div class="about-img-content"></div>
                    <div class="about-text content">
                        <h2>Content Strategy</h2>
                        <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground rount t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tounge ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
                    </div>
                </div>
                 <div class="about_influencer">
                    <div class="about-text influencer"> 
                        <h2>Influencer Mapping</h2>
                        <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground rount t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tounge ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
                    </div>
                    <div class="about-img-influencer"></div>
                <div class="about_social">
                    <div class="about-img-social"></div>
                    <div class="about-text social"> 
                        <h2>Social Media Strategy</h2>
                        <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground rount t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tounge ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
                    </div>
                </div>
                <div class="about_design">
                    <div class="about-text design"> 
                        <h2>Design &amp; Development</h2>
                        <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground rount t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tounge ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
                    </div>
                    <div class="about-img-design"></div>
                </div>
                </div>
               
               <div class="interested">
                    <h4>Interested in working with us?</h4>
                   <a href="http://localhost:8888/accelerate/contact-us/" class="button-contact-us">Contact Us</a>
               </div>

                    
       


            <?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>