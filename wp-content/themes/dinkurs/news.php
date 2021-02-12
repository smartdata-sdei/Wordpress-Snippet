    <?php
/**
 * The front page template file
 * Template Name: News
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




<!-- End Header Navigation -->
    <!-- Page Title -->
    <section class="pageTitle img-bck" >
        <div class="container">
            <h1 class="wow bounceInLeft"  data-wow-delay="0.05s">
                <?php the_field('event_news','195')?>
            </h1>
            <ul class="breadcrumb wow bounceInRight"  data-wow-delay="0.05s">
                <li><?php breadcrumbs(); ?></li>
            </ul>
        </div>
    </section>
    <!-- //Page Title -->
    <!-- Article Section -->
    <section class="section eventSection">
        <div class="container">
            <h2 class="wow bounceInDown" data-wow-delay="0.05s"><?php the_field('news-page-heading','195')?></h2>
            <div class="row">
                <!-- Article Left Section -->
                <div class="col-md-8">
                    <!-- EVent Post -->
                    
                        <?php
                                $the_query = new WP_Query( array('posts_per_page'=>2,
                                                             'post_type'=>'news_post',
                                                             'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                                        ); 
                                                        ?>

                        
                                                   
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <div class="eventPost wow bounceInLeft" data-wow-delay="0.05s">
                        
                            <div class="col-xs-12 file">
                             
                             <h3><?php echo get_the_title(); ?></h3>
                             <h5><?php echo get_field('news-sub-title') ?></h5>
                            
                                <div class="image">
                                    <div class="img">
                                        <img class="img-fluid" src="<?php echo get_field('news-front-images')?>" width="56" height="56" alt="" />
                                    </div>
                                    <div class="imgoverlay">
                                        <div class="align-middle">
                                            <div class="date">
                                                <span><i class="fas fa-calendar-alt"></i><?php echo get_field('event-date')?> </span>
                                                <span><i class="far fa-clock"></i> <?php echo get_field('event-time')?> </span>
                                            </div>
                                            <div class="location"><i class="fas fa-map-marker-alt"></i> <?php echo get_field('event-city')?> </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="file-description">
                              <?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 35 ) ); ?>
                            </div>
                                            <div class="entry-content">
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php the_field('read_more_text','195')?></a>
                                            </div>
                            </div>
                             </div>
                            <?php
                            endwhile;

                            $big = 999999999; // need an unlikely integer
                             
                             ?> <div class="pagi"> <?php echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $the_query->max_num_pages
                            ) ); ?>
                            </div>
                               <?php 
                            wp_reset_postdata();

                     ?>
            
                </div>
                <!-- //Article Left Section -->
                <!-- Right Section -->
                <div class="col-md-4">
                    <div class="rightSidebar">
                        <!-- Latest news Item -->
                        <div class="box wow bounceInRight"  data-wow-delay="0.05s">
                            <h2 class="title"><?php the_field('latest_news_text','195')?></h2>
                            <!-- News Item -->
                            <?php
                                $the_query = new WP_Query( array('posts_per_page'=>3,
                                                             'post_type'=>'news_post',
                                                             'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                                        ); 
                                                        ?>

                        
                                                   
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <div class="latestnewsItem clearfix">
                                <div class="image">
                                    <img class="img-fluid" src="<?php echo get_field('news-front-images')?>" width="56" height="56" alt="" />
                                </div>
                                <div class="detail">
                                    <h4><a href="<?php echo get_permalink(); ?>" class="latest-news-title"><?php echo get_the_title(); ?></a></h4>
                                    <div class="date">
                                        <i class="fas fa-calendar-alt"></i> <?php echo get_field('event-date')?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;

                            wp_reset_postdata();

                     ?>
                            
                        </div>
                        <!-- //Latest news Item -->

                        <!-- Latest news Item -->
                        <div class="box wow bounceInRight"  data-wow-delay="0.05s">
                            <h2 class="title"><?php the_field('find_us_on_facebook_text','195')?></h2>
                        </div>
                        <!-- //Latest news Item -->
                    </div>
                </div>
                <!-- //Right Section -->
            </div>
           
        </div>
    </section>
    <!-- END Article Section -->
    <!-- Footer Section -->
<?php
get_footer();
