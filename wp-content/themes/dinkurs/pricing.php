<?php
/**
 * The front page template file
 * Template Name: Pricing
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

	<div class="pageTitle about-banner" style="background: url(<?php echo the_field('background_image','23'); ?>">
		<div class="container">
			<div class="about-banner-content">
				 <h2><?php echo the_field('webinar_title','23'); ?></h2>
			<p><?php echo the_field('webinat_subtitle','23'); ?></p>
			</div>
		</div>
	</div> 


 <!-- Page Title -->
  <!--  <section class="pageTitle img-bck-pricing">
        <div class="container">
            <h1 class="wow bounceInLeft" data-wow-delay="0.05s">
            <?php the_field('pricing_banner_text','23')?>
            </h1>
            <ul class="breadcrumb wow bounceInRight"  data-wow-delay="0.05s">
                <li><a href="#"><?php breadcrumbs(); ?></li> 
            </ul>
        </div>
    </section> -->
    <!-- //Page Title -->
    <!-- Pricing Section -->
    <section class="section pricingTable">
        <div class="container">
            <!-- Title -->
            <div class="title text-center wow bounceInDown"  data-wow-delay="0.05s">
                <h2><span class="txtPrimary"><?php the_field('pick-plan-heading','23')?></span><?php the_field('pick-plan-heading_grow_fast','23')?></h2>
            </div>
            <!-- //Title -->
			 
				     <?php
                                $args = array(
                                    'post_type' => 'pricing_plan',						
									'posts_per_page' => 3,
									'orderby' => 'menu_order date',
									'order'   => 'ASC',
                                );
                                $query = new WP_Query( $args );
                                ?>
                               
                                <div class="row pricingpost"> 
                                <?php if($query->have_posts()) : ?>
                                    <?php $i = 0; ?>
                                    <?php while($query->have_posts()) : $query->the_post() ?>
										<!-- Pricing Col -->
										<div class="col-md-4">
											<!-- Pricing Table -->
											<div class="pricingBox <?php the_field('color_class')?>">
												<div class="title">
													<h3><?php echo the_title(); ?></h3>
													<p><?php the_field('sub_title')?></p>
												</div>
												<div class="price">
													<span class="text-primary freeTxt"><?php the_field('price_text')?></span>
												</div> 
												<ul class="list">
													<?php echo the_content(); ?>
												</ul>
												<div class="button">
													<a href="<?php the_field('button_link')?>" class="btn btn-primary text-uppercase"><?php the_field('choose_plan','23');?></a> 
												</div>
		<?php if($i != 2){ }else{  ?>												
		 <div class="contact-pop button cust132">
		   <a href="javascript:void(0)" class="hamburger hamburger--spring js-hamburger btn btn-primary text-uppercase">
			  <?php 
				 $currentlang = get_bloginfo('language');
				   if($currentlang=="en-GB"){ echo
					 "Contact us" ;}
					 else{
					   echo "Kontakta oss";  
					 }
				 ?>
			  <div class="hamburger-box">
				 <div class="hamburger-inner"></div>
			  </div>
		   </a>
		</div>
	<?php } ?>											
												<div class="cust_buttons"></div>					
												<!-- FeatureLink -->
												<div class="featureLink">
													<a class="collapsed" data-toggle="collapse" href="#feature<?php the_field('color_class')?>" role="button" aria-expanded="false" aria-controls="feature<?php the_field('color_class')?>">
													<i class="fas fa-plus-circle"></i> <i class="fas fa-minus-circle"></i> 
													<?php the_field('show_all_features','23')?>
													</a>
												</div>
												<!-- //FeatureLink -->
												
												<div class="collapse" id="feature<?php the_field('color_class')?>">  
												  <ul class="list">
													<?php the_field('show_all_features')?>
												  </ul> 
												</div>
					
											</div>
											<!-- //Pricing Table --> 
										</div>
										<!-- //Pricing Col --> 
										<?php $i++; ?>
                                    <?php endwhile ?>
                                <?php endif ?>
								</div>
                                  
                        <?php wp_reset_postdata(); ?>
			 
			 
        </div>
    </section>
    <!-- END Pricing Section -->
    <!-- Startup Service Section -->
    <section class="section registerCta startupplanPrice">
        <div class="container">

                    <h3 class="titleFont wow bounceInLeft" data-wow-delay="0.05s"><?php the_field('annual_plan','23')?></h3>
                    <p  class="wow bounceInRight" data-wow-delay="0.05s"><?php the_field('sale_team','23')?> <br/><?php the_field('discount_annual','23')?></p>
        
                    <div class="button mt-5 wow fadeInUp" data-wow-delay="0.05s">
                    <div class="contact-pop pricing-contact"><a href="javascript:void(0)" class=" hamburger hamburger--spring js-hamburger btn"><?php the_field('contact_button_text','23')?>
                  <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                  </div>
                    </a></div>
                        <!-- <a href="#" class="btn btn-primary btn-main text-uppercase mb-2">Contact Us</a> -->
                    </div>
       </div>
    </section>
    <!-- END Startup Service Section -->

    <section class="section bgGray referenceCustomer pricing-ref">
        <div class="container">
            <!-- Title -->
            <div class="title ref-title text-center wow bounceInDown"  data-wow-delay="0.05s">
                <h2><?php the_field('reference_customer_text','19')?></h2>
                <p><?php the_field('take_a_look_text','19')?></p>
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
                     <div class="brand-box">
                          <span class="user-image"><img src="<?php echo get_field('reference-customer-image')?>" alt="HELLO" class="img-responsive"></span>
                          <p class="testi-text"><?php echo get_field('slidertext'); ?></p>        
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

                 
            
                <!-- Button -->
                <div class="button text-center mt-5">
                    <a href="<?php echo get_permalink(170);?>" class="btn btn-primary btn-main"><?php the_field('view_more_text','19')?></a>
                </div>
                <!-- //Button --></section>

<?php
get_footer();
