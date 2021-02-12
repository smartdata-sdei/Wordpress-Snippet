    <?php
/**
 * The front page template file
 * Template Name: function-list
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

	<div class="pageTitle about-banner" style="background: url(<?php echo the_field('background_image','475'); ?>">
		<div class="container">
			<div class="about-banner-content">
				 <h2><?php echo the_field('webinar_title','475'); ?></h2>
			<p><?php echo the_field('webinat_subtitle','475'); ?></p>
			</div>
		</div>
	</div> 
 <!-- Banner/Slider -->
    <!-- Function Section -->
    <section class="section">
        <div class="container">
            <!-- Title -->
            <div class="title text-center wow bounceInDown"  data-wow-delay="0.05s">
                <h2><?php the_field('function-list-heading','19')?></h2>
                <p><?php the_field('function-list-text','19')?></p>
            </div>
            <!-- //Title -->
                <div class="main-div" >
                        <!-- Function List -->
                    <div class="entry-content">
                        <?php
                         global $post;
                        $args = array( 'post_type' => 'function_list', 'post_status' => 'publish', 'posts_per_page' => -1 );
                        $loop = new WP_Query( $args ); ?>

                        <div id="my-posts" class="row">
                         <?php
                          while ( $loop->have_posts() ) : $loop->the_post(); ?>
                           <div class="col-md-6">
                                <div class="functionList wow bounceInLeft"  data-wow-delay="0.05s">
                                    <!-- Image -->
                                    <div class="icon">
                                        <img src="<?php echo get_field('function_list')?>" width="56" height="56" alt="" />
                                    </div>
                                    <!-- //Image -->
                                    <!-- Text -->
                                    <div class="text">
                                        <h4><?php the_title(); ?></h4>
                                         <p><?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 25 ) ); ?></p>
                                            <div class="entry-content">
                                                <a href="<?php the_permalink(); ?>"><?php the_field('fuction_list_read_more_text_','19') ?></a>
                                            </div>
                                    </div>
                                    <!-- //Text -->
                                </div>
                            </div>
                            <?php
                              endwhile;
                            ?>
                        </div>
                    </div>
                </div>   
                    
                     
        </div>
    </section>
    <!-- END Function Section -->

    <!-- END Article Section -->
<?php
get_footer();    
                          

                        
                    

