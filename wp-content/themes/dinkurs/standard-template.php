<?php
/**
 * Template Name: Standard Template
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="standard-page-section">    
    <section class="pageTitle img-bck-pricing">
        <div class="container">
            <h1 class="wow bounceInLeft" data-wow-delay="0.05s">
           <?php the_field('policy_page_text','19')?>
            </h1>
            <ul class="breadcrumb wow bounceInRight"  data-wow-delay="0.05s">
                <li><a href="<?php get_permalink("19"); ?>"> <?php the_field('home_text','19')?></a> /  <?php the_field('policy_text_here','19')?></li> <!-- Function to call breadcrump -->
            </ul>
        </div>
    </section>
 <!-- Banner/Slider -->
    <section class="standerd">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <div class="add-css">
                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            the_content();
                        } // end while
                    } // end if
                ?>
            </div>
          </div>
        </div>
    </div>
    </section>
 </div>   


    <!-- END Article Section -->


<?php
get_footer();
