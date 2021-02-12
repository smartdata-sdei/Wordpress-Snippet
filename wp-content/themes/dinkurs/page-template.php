<?php
/**
 * Template Name: Page Template
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

    <section class="page-template">
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

<style>
h1 {font-size: 2.5rem;}
h2 {font-size: 2rem;}
h3 {font-size: 1.75rem;}
h4 {font-size: 1.50rem;}
h5 {font-size: 1.25rem;}
h6 {font-size: 1rem;}
.add-css {padding-top: 64px;line-height: 34px;padding-bottom: 50px;}
</style>
    <!-- END Article Section -->


<?php
get_footer();
