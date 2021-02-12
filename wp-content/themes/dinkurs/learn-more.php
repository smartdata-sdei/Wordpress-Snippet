    <?php
/**
 * The front page template file
 * Template Name: Learn More
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
 <!-- Banner/Slider -->
    <section class="reference-padding new-learn">
       <div class="container-fluid">   
      <div class="title">
         <h2>Learn More</h2>
      </div>
		</div>
		<div class="container">
       <div class="row">
                <!-- Article List -->

                 <?php
                         global $post;
                        $args = array( 'post_type' => 'learn_more', 'post_status' => 'publish', 'posts_per_page' => 4 );
                        $loop = new WP_Query( $args ); ?>

                  <?php
                          while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-md-6">
                            <div class="articleList">
                               
                                 <div class="reference-customer-image">
                                    <img src="<?php echo get_field('learn_more_image')?>" width="56" height="56" alt="" />
                                 </div>
                                 <div class="detail">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?> </p>
                                 </div>
                            </div>
                        </div>
                            <?php
                              endwhile;
                            ?>

            </div>
             </div>
    </section>
    <!-- END Article Section -->
<?php get_footer();
