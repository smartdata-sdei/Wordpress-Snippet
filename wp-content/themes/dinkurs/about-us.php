<?php
/**
 * The front page template file
 * Template Name: About Us
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

	<div class="pageTitle about-banner" style="background: url(<?php echo the_field('background_image','1377'); ?>">
		<div class="container">
			<div class="about-banner-content">
				 <h2><?php echo the_field('webinar_title','1377'); ?></h2>
			<p><?php echo the_field('webinat_subtitle','1377'); ?></p>
			</div>
		</div>
	</div> 
<div class="about-main">
<!--	<div class="pageTitle about-banner" style="background: url(<?php echo the_field('banner_image','1377'); ?>">
		<div class="container">
			<div class="about-banner-content">
				 <h2><?php echo the_field('about_title','1377'); ?></h2>
			<p><?php echo the_field('banner_content','1377'); ?></p>
			</div>
		</div>
	</div> -->
	<div class="typo-section pad-outer">
	   <div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-sm-12">
					<div class="typo-left">
						<img src="<?php echo the_field('second_section_image','1377'); ?>">  
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="typo-right">
						<h2><?php echo the_field('second_section_title','1377'); ?></h2>
						<p><?php echo the_field('second_section_text','1377'); ?></p>
					</div>
				</div>
			</div>
	   </div>
	</div>
        <div class="team-section text-center pad-outer">
            <h2 class="title-main mar-b20"><?php echo the_field('our_team_text','1377'); ?></h2>
            <div class="about-team-page">
            <div class="container">
                <?php
                                $args = array(
                                    'post_type' => 'about_team',
                                    'orderby' => 'menu_order title',
                                    'order'   => 'ASC',
                                );
                                $query = new WP_Query( $args );
                                ?>
                               
                                <div class="row"> 
                                <?php if($query->have_posts()) : ?>
                                    <?php $i = 0; ?>
                                    <?php while($query->have_posts()) : $query->the_post() ?>
                                    
                                        <div id="refrence-cus-id" class="col-md-4 col-sm-6">
                                            <div class="articleList custom-article-list">
                                              <div class="arrow-icon">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/arrow-test.svg">
                                              </div>
                                                <div class="reference-customer-image custom-reference-customer-image">
                                                  <img src="<?php echo get_field('team_member_image')?>" alt="HELLO" class="img-responsive"> 
                                                </div>
                                                <div class="detail custom-test-detail">
                                                    <h2><?php echo the_title(); ?></h2>
													<h5><?php echo get_field('team_member_position')?></h5>
													<div class="email"><a href="mailto:<?php echo get_field('team_member_email')?>"><?php echo get_field('team_member_email')?></a></div>
                                                    <?php //echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 45 ) ); ?>

                                                </div>
											   <!--<div class="entry-content custom-entry-content mar-top">
												  <a href="<?php the_permalink();?>"  class="refread">
													<?php the_field('fuction_list_read_more_text_','19') ?>
												  </a>
												</div>-->
                                                <div class="social-network">
												   <?php if( get_field('facebook_url') == true ){ ?>
														<a href="<?php echo get_field('facebook_url');?>"><span class="fb"><i class="fab fa-facebook-f"></i></span></a>
													<?php } ?>
													<?php if( get_field('twitter_url') == true ){ ?>
														<a href="<?php echo get_field('twitter_url');?>"><span class="twitter"><i class="fab fa-twitter"></i></span></a>
													<?php } ?>
													<?php if( get_field('linkedin_url') == true ){ ?>
														<a href="<?php echo get_field('linkedin_url');?>"><span class="linkedin"><i class="fab fa-linkedin-in"></i></span></a>
													<?php } ?>
												</div>
                                                                         
                                            </div>
                                        </div>
                                  
                                        <?php $i++; ?>
                                    <?php endwhile ?>
                                <?php endif ?>
                                  </div>
                                  
                        <?php wp_reset_postdata(); ?>
            </div>
           </div>     
                            
            </div>
        
        <div class="action-sec text-center pad-outer">
            <div class="container">
                <div class="row ">
                    <?php

                    $args = array(
                        'post_type' => 'post',						
                        'posts_per_page' => 3,
                        'orderby' => 'menu_order date',
                        'order'   => 'DESC',
                    );
                    $query = new WP_Query( $args );
                    ?>
                    <?php if($query->have_posts()) : ?>
                                    <?php $i = 0; ?>
                                    <?php while($query->have_posts()) : $query->the_post() ?>
                      <div class="col-md-4 col-sm-12 brdr-rght">
                        <div class="action-inner">
							<div class="text">
								<h2><?php echo the_title(); ?></h2>
								<p><?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 15 ) ); ?></p>
							</div>
                            <a href="<?php echo the_permalink(); ?>" class="btn btn-primary">LÄS MER</a>
                        </div>
                    </div>
                            <?php $i++; ?>
                        <?php endwhile ?>
                    <?php endif ?>
                            
                        <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
        <div class="client-section text-center pad-outer">
            <div class="container">
                <div class="client-inner">
                    <h2 class="title-main">
                        <?php echo the_field('our_client_logo_heading','1377'); ?>
                    </h2>
                    <div class="slick2">
                            <img src="<?php echo the_field('client_logo1','1377'); ?>">
                            <img src="<?php echo the_field('client_logo2','1377'); ?>">
                            <img src="<?php echo the_field('client_logo3','1377'); ?>">
                            <img src="<?php echo the_field('client_logo4','1377'); ?>">
                            <img src="<?php echo the_field('client_logo5','1377'); ?>">
                        
                    </div>
                </div>
            </div>
        </div>
		</div>
        <section class="section bgGray referenceCustomer">
    <div class="container">
    
        <div class="row">
            <div class="col-lg-12">
                <div class="title ref-title text-center wow bounceInDown"  data-wow-delay="0.05s">
                    <h2><?php the_field('reference_customer_text','19')?></h2>
                    <p><?php the_field('take_a_look_text','19')?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ref-slider regular slider">
                <?php

                    $args = array(
                        'post_type' => 'reference_customer',
                        'orderby' => 'menu_order title',
                        'order'   => 'ASC',
                    );
                    $query = new WP_Query( $args );
                    ?>
                    <?php if($query->have_posts()) : ?>
                                    <?php $i = 0; ?>
                                    <?php while($query->have_posts()) : $query->the_post() ?>
                     <div class="brand-box text-space-bottom">
                          <span class="user-image">
                              <img src="<?php echo get_field('reference-customer-image')?>" alt="HELLO" class="img-responsive">
                          </span>
                          <p class="testi-text">
                          <?php echo get_field('slidertext'); ?></p>        
                          <div class="testi-name"><?php echo get_field('reference-customer-name') ?></div>
                          <div class="reference-company-name"><?php echo get_field('reference-company-name') ?></div>        
                      </div>
                            <?php $i++; ?>
                        <?php endwhile ?>
                    <?php endif ?>
                            
                        <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Button -->
                <div class="button text-center mt-5">
                    <a href="<?php echo get_permalink(170);?>" class="btn btn-primary btn-main">
                        <?php the_field('view_more_text','19')?>
                    </a>
                </div>
                <!-- //Button -->
            </div>
        </div>        


    </div>
</section>
 


<?php
get_footer();
