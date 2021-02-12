<?php
/**
 * The front page template file
 * Template Name: Home
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
    <section class="banner">
        <div class="banner-content align-items-center  customCarousel carousel slide" id="bannerCarousel"  data-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel Item -->
                <div class="carousel-item active">
                    <div class="container">
                        <!--begin row -->
                        <div class="row align-items-center mobile-center">
                            <div class="col-lg-6 col-md-12 order-lg-first">
                                <div class="banner-text" data-animation="animated bounceInLeft">
                                    <h4  data-animation="animated bounceInDown"><?php the_field('event-registration1','19');?></h4>
                                    <h2><?php the_field('heading1','19');?></h2>
                                    <p><?php the_field('contect1','19');?></p>
                                    <p><?php the_field('content2','19');?></p>
                                    <div class="formButton"  data-animation="animated bounceInUp">
                                        <a href="https://dinkurs.se/admin/" class="btn btn-primary" data-animation="animated bounceInRight"><?php the_field('register_button1','19');?></a>
                                        <a href="<?php echo get_permalink("444");?>" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('learn_more1','19');?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 order-first no-pd">
                                <div class="banner-image text-right"  data-animation="animated bounceInRight">

                                <?php
                                    $currentlang = get_bloginfo('language');
                                    if($currentlang=="en-GB"){
                                        ?> <img src="<?php the_field('carousel_banner1','19');?>" class="img-fluid" alt="Event Registration" />
                                   <?php }
                                 else{ ?>

                                   <img src="<?php the_field('carousel_swedesh_banner1','19');?>" class="img-fluid" alt="Event Registration" />
                                <?php }
                               ?>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <!--end row --> 
                    </div>
                </div>
                <!-- //Carousel Item -->
                 <!-- Carousel Item -->
                 <div class="carousel-item banner-Itemv2">
                    <div class="container">
                        <!--begin row -->
                        <div class="row align-items-center mobile-center">
                            <div class="col-lg-6 col-md-12 order-first no-pd">
                                <div class="banner-image text-center"  data-animation="animated bounceInRight">

                                <?php
                                    $currentlang = get_bloginfo('language');
                                    if($currentlang=="en-GB"){
                                        ?> <img src="<?php the_field('carousel_banner2','19');?>" class="img-fluid" alt="Event Registration" />
                                   <?php }
                                 else{ ?>

                                   <img src="<?php the_field('carousel_banner_swwedesh2','19');?>" class="img-fluid" alt="Event Registration" />
                                <?php }
                               ?>

                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 order-lg-first">
                                <div class="banner-text" data-animation="animated bounceInLeft">
                                    <h4  data-animation="animated bounceInDown"><?php the_field('event-registration2','19');?></h4>
                                    <h2><?php the_field('heading2','19');?></h2>
                                    <p><?php the_field('carosel2-contect1','19');?></p>
                                    <p><?php the_field('carosel2-contect2','19');?></p>
                                    <div class="formButton"  data-animation="animated bounceInUp">
                                        <a href="https://dinkurs.se/admin/" class="btn btn-primary" data-animation="animated bounceInRight"><?php the_field('register_button2','19');?></a>
                                        <a href="<?php echo get_permalink("444");?>" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('learn_more2','19');?></a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <!--end row --> 
                    </div>
                </div>
                <!-- //Carousel Item -->
            <!-- Carousel Item -->
            <div class="carousel-item banner-Itemv3">
                    <div class="container">
                        <!--begin row -->
                        <div class="row align-items-center mobile-center">
                            <div class="col-lg-6 col-md-12 order-lg-first">
                                <div class="banner-text" data-animation="animated bounceInLeft">
                                    <h4  data-animation="animated bounceInDown"><?php the_field('event-registration3','19');?></h4>
                                    <h2><?php the_field('heading3','19');?></h2>
                                    <p><?php the_field('carosel3-contect1','19');?></p>
                                    <p><?php the_field('carosel3-contect2','19');?></p>
                                    <div class="formButton"  data-animation="animated bounceInUp">
                                        <a href="https://dinkurs.se/admin/" class="btn btn-primary" data-animation="animated bounceInRight"><?php the_field('register_button3','19');?></a>
                                        <a href="<?php echo get_permalink("444");?>" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('learn_more3','19');?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 order-first no-pd">
                                <div class="banner-image text-center"  data-animation="animated bounceInRight">
                                    <img src="<?php the_field('carousel_banner3','19');?>" class="img-fluid" alt="Event Registration" />
                                </div>
                            </div>
                            
                        </div>
                        <!--end row --> 
                    </div>
                </div>
                <!-- //Carousel Item -->

                <!-- Carousel Item -->


            <div class="carousel-item banner-Itemv4">
                    <div class="container">
                        
                        <div class="row align-items-center mobile-center">
                            <div class="col-lg-6 col-md-12 order-lg-first">
                                <div class="banner-text" data-animation="animated bounceInLeft">
                                    <h4  data-animation="animated bounceInDown"><?php the_field('event-registration4','19');?></h4>
                                    <h2><?php the_field('heading4','19');?></h2>
                                    <p><?php the_field('carosel4-contect1','19');?></p>
                                    <p><?php the_field('carosel4-contect2','19');?></p>
                                    <div class="formButton"  data-animation="animated bounceInUp">

                                        <a href="https://dinkurs.se/admin/" class="btn btn-primary" data-animation="animated bounceInRight"><?php the_field('register_button4','19');?></a>
                                        <a href="<?php echo get_permalink("444");?>" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('learn_more4','19');?></a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 order-first no-pd">
                                <div class="banner-image text-center"  data-animation="animated bounceInRight">

                                <?php
                                    $currentlang = get_bloginfo('language');
                                    if($currentlang=="en-GB"){
                                        ?> <img src="<?php the_field('carousel_banner4','19');?>" class="img-fluid" alt="Event Registration" />
                                   <?php }
                                 else{ ?>

                                   <img src="<?php the_field('carousel_swedesh_banner4','19');?>" class="img-fluid" alt="Event Registration" />
                                <?php }
                               ?>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
            </div>

            
                <!-- //Carousel Item -->
           
            </div>
            <a class="carousel-control-prev wow bounceInDown"  data-wow-delay="0.05s" href="#bannerCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next wow bounceInDown"  data-wow-delay="0.05s" href="#bannerCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- End Banner/Slider -->
    
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
                        $args = array( 'post_type' => 'function_list', 'post_status' => 'publish', 'posts_per_page' => 4 );
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
                                         <p> 
                                          <?php echo get_field("front_page_text"); ?>
                                         </p>
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
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>   
                    <div class="button text-center mt-4  wow fadeInUp"  data-wow-delay="0.05s">
                       <div  class="loadmore btn btn-primary btn-main"><?php the_field('load_4_more_functions','19') ?></div>
                       <a href="<?php echo get_permalink(475);?>" class=" loadmore1 btn btn-primary btn-main"><?php the_field('show_all_functions','19') ?></a>
                    </div>    
        </div>
    </section>
    <!-- END Function Section -->

     <!-- Video Demo Section -->
     <section class="section videoSection">
        <div class="container">
            <div class="title">
                <h2><?php the_field('right_service','19') ?></h2>
                <p><?php the_field('right_service_text','19') ?></p>
            </div>
            <div class="videoNewsletter clearfix">
                <!-- Video Section -->
                <div class="videoBox">
                    <h4><?php the_field('watch_demo_for_demo_video','19') ?></h4>
                    <div class="video">

                        <a href="#" data-toggle="modal" data-target="#videoModal" class="playBtn"><i class="fa fa-play"></i></a>
                         <?php
                            $currentlang = get_bloginfo('language');
                            if($currentlang=="en-GB"){ ?>
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-img.jpg" class="img-fluid"  alt="" />   
                           <?php }
                           else{?>
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/resize.png" class="img-fluid"  alt="" />   
                           <?php }
                            ?>
                        
                    </div>
                </div>
                <!-- //Video Section -->
                <!-- Newsletter Box -->
                <div class="newsletterBox">
                    <h3><?php the_field('personal_demo_for_demo_video','19') ?></h3>
                    <h4><?php the_field('find_actionable_for_demo_video','19') ?></h4>
                    
                    <form onsubmit= "return validation()" class="nesletterForm"  method="Post">
                        <input  type="email" id="term" name="email" placeholder="<?php the_field('place_holder_text_for_demo_video','19') ?>" class="form-control" value="" >
                        <button  type="submit"  id="demovideo" class="btn btn-primary"><?php the_field('get_started_for_demo_video','19') ?></button>
                    </form>
                      
                    <div class="helpText"><?php the_field('2000_organizations_text_for_demo_video','19') ?></div>
                </div>
                <!-- //Newsletter Box -->
            </div>
        </div>
    
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-video" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="<?php the_field('video_url','19')?>" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed embed-responsive-item" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                        </div>
                        <script src="https:////fast.wistia.net/assets/external/E-v1.js" async></script>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Video Modal -->
    
    </section>
    <!-- Refrence Customer Section -->
    <section class="section bgGray referenceCustomer">
        <div class="container">
            <!-- Title -->
            <div class="title text-center wow bounceInDown"  data-wow-delay="0.05s">
                <h2><?php the_field('reference_customer_text','19')?></h2>
                <p><?php the_field('take_a_look_text','19')?></p>
            </div>
            
                    <?php
                                $args = array(
                                    'post_type' => 'reference_customer',
                                    'orderby' => 'menu_order title',
                                    'order'   => 'ASC',
                                );
                                $query = new WP_Query( $args );
                                ?>
                        
                                <?php if($query->have_posts()) : ?>
                                    <div class="clientsImage wow bounceInLeft"  data-wow-delay="0.05s">
                                        
                                      <div class="clientSlider owl-carousel">
                                                <?php $i = 0; ?>
                                        <?php while($query->have_posts()) : $query->the_post() ?>
                                                
                                        <div class="item" data-id="<?php the_ID();?>"> 
                                          <div class="creosel-img">
                                        <img src="<?php echo get_field('reference-customer-image')?>" alt="IMG" class="img-responsive"> 
                                         </div>
                                        <!-- <div class="clientItem">
                                                   <div class="comment">
                                                      <p><?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 10 ) ); ?></p>
                                                   </div>
                                                   <div class="info"> 
                                                    <span class="name"><?php echo get_field('reference-customer-name') ?></span> 
                                                    <span class="role"><?php echo get_field('reference-company-name') ?></span> 
                                                   </div>
                                        </div> -->


                                        </div> 

                                        
                                         <?php endwhile ?>
                                      </div>
                                    </div>
                        
                                    
                   
                              <?php $i++; ?>
                                <?php endif ?>
                                 
                        <?php wp_reset_postdata(); ?>

                    
                <!-- Button -->
                <div class="button text-center mt-5">
                    <a href="<?php echo get_permalink(170);?>" class="btn btn-primary btn-main">
                        <?php the_field('view_more_text','19')?>
                    </a>
                </div>
                <!-- //Button -->
        </div></section>
    <!-- END Refrence Customer Section -->
    <!-- Article Section -->
    <section class="section aticleSection">
        <div class="container">
            <!-- Title -->
            <div class="title text-center">
                <h2><?php the_field('demo_site_heading','19')?></h2>
                <p><?php the_field('demo_site_text','19')?></p>
            </div>
            <!-- //Title -->
            <div class="row">
                <!-- Article List -->

                 <?php
                         global $post;
                        $args = array( 'post_type' => 'demo_site', 'post_status' => 'publish', 'posts_per_page' => 3 );
                        $loop = new WP_Query( $args ); ?>

                  <?php
                          while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-md-4">
                            <div class="articleList">
                                 <div class="demo-site-img">
                                    <img src="<?php echo get_field('demo_site_img')?>" width="56" height="56" alt="" />
                                 </div>
                                 <div class="detail">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_content(); ?> </p>
                                 </div>
                            </div>
                        </div>
                            <?php
                              endwhile;
                            ?>

            </div>
            <!-- Button -->
            <div class="button text-center mt-5">
                <a href="#" class="btn btn-primary btn-main"><?php the_field('visit_demosite_text','19')?></a>       
            </div>
            <!-- //Button -->
        </div>
    </section>


    <!-- END Article Section -->


<?php
get_footer();
