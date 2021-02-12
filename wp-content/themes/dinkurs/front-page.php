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
         <?php $the_query = new WP_Query( array('posts_per_page'=>1,
            'post_type'=>'homepage_banner',
            'order'    => 'ASC',
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
            ); 
             
            $post_count = get_the_id();
            ?>
         <?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
            if ($post_count++ % 2 == 0){ ?>
         <!-- Carousel Item -->
         <div class="carousel-item">
            <div class="container">
               <!--begin row -->
               <div class="row align-items-center mobile-center">
                  <div class="col-lg-6 col-md-12 order-lg-first">
                     <div class="banner-text" data-animation="animated bounceInLeft">
                        <h4 data-animation="animated bounceInDown"><?php  echo get_field('sub_heading'); ?></h4>
                        <h2><?php the_title(); ?></h2>
                        <?php echo get_the_content(); ?>
                        <div class="formButton"  data-animation="animated bounceInUp">
                           <?php 
                              $currentlang = get_bloginfo('language');
                                if($currentlang=="en-GB"){ ?>
                           <a href="https://dinkurs.se/admin/?set_lang=en" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('button_first');?></a>
                           <?php }
                              else{ ?>
                           <a href="https://dinkurs.se/admin/?set_lang=sv" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('button_first');?></a> 
                           <?php } 
                              ?>
                           <a href="<?php echo get_permalink("475");?>" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('button_second');?></a>
                        </div>
                        <!-- Subscription Form -->
                        <div class="banner-subscription 1">
                           <form onsubmit= "return validation('form_id<?php echo get_the_ID(); ?>')" action="#" name="post_id<?php echo get_the_ID(); ?>" id="form_id<?php echo get_the_ID(); ?>">
                              <div class="subscription-form post_id<?php echo get_the_ID(); ?>" id="odd_btn_id">
                                 <input class="form-control input1" type="email" id="term" name="email_address" placeholder="<?php the_field('banner_email_placeholder_name','19');?>" required>
                                 <button class="btn btn-primary" id="postid<?php echo get_the_ID(); ?>"><?php the_field('banner_email_button_name','19');?></button> 
                              </div>
                           </form>
                        </div>
                        <!-- //Subscription Form -->
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 order-first no-pd">
                     <div class="banner-image text-right"  data-animation="animated bounceInRight">
                        <?php
                           $currentlang = get_bloginfo('language');
                           if($currentlang=="en-GB"){
                               ?> <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="Event Registration" />
                        <?php }
                           else{ ?>
                        <img src="<?php the_field('image_for_swedish_language');?>" class="img-fluid" alt="Event Registration" />
                        <?php }
                           ?>
                     </div>
                  </div>
               </div>
               <!--end row --> 
            </div>
         </div>
         <!-- //Carousel Item -->
         <?php }
		              else{?>
         <!-- Carousel Item -->
         <div class="carousel-item banner-secondarycolor">
            <div class="container">
               <div class="row align-items-center mobile-center">
                  <div class="col-lg-6 col-md-12 order-lg-first">
                     <div class="banner-text" data-animation="animated bounceInLeft">
                        <h4 data-animation="animated bounceInDown"><?php  echo get_field('sub_heading'); ?></h4>
                        <h2><?php the_title(); ?></h2>
                        <?php echo get_the_content(); ?>
                        <div class="formButton"  data-animation="animated bounceInUp">
                           <?php 
                              $currentlang = get_bloginfo('language');
                                if($currentlang=="en-GB"){ ?>
                           <a href="https://dinkurs.se/admin/?set_lang=en" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('button_first');?></a>
                           <?php } 
                              else{ ?>
                           <a href="https://dinkurs.se/admin/?set_lang=sv" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('button_first');?></a> 
                           <?php } 
                              ?>
                           <a href="<?php echo get_permalink("475");?>" class="btn btn-secondary" data-animation="animated bounceInRight"><?php the_field('button_second');?></a>
                        </div>
                        <!-- Subscription Form -->
                        <div class="banner-subscription 2">
                           <!-- Subscription Form -->
                           <div class="banner-subscription 3"> 
                              <form method="post" id="cpa-form">
                                 <div class="subscription-form post_id<?php echo get_the_ID(); ?>" id="odd_btn_id">
                                    <input class="form-control input2 emailtrigger" type="email" id="term emailtrigger" name="email_address" placeholder="<?php the_field('banner_email_placeholder_name','19');?>" required>
									<?php
										$currentlang = get_bloginfo('language');
										  if($currentlang=="en-GB"){ 
									 ?> 
                                    <button class="btn btn-primary g-recaptcha enableOnInput" onclick="myFunctiondfsd()"  disabled='disabled'  data-toggle="modal" data-target="" id="postid<?php echo get_the_ID(); ?>"><?php the_field('banner_email_button_name','19');?></button> 
									 <?php  }else { ?>
									 <button class="btn btn-primary g-recaptcha enableOnInput" onclick="myFunctiondsdfc()"  disabled='disabled'  data-toggle="modal" data-target="" id="postid<?php echo get_the_ID(); ?>"><?php the_field('banner_email_button_name','19');?></button> 		   
									 <?php }?>		  
                                 </div>
                              </form> 
                           </div>
                           <!-- //Subscription Form -->
                        </div>
                        <!-- //Subscription Form -->
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 order-first no-pd">
                     <div class="banner-image text-right"  data-animation="animated bounceInRight">
                        <?php
                           $currentlang = get_bloginfo('language');
                           if($currentlang=="en-GB"){
                               ?> <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="Event Registration" />
                        <?php }
                           else{ ?>
                        <img src="<?php the_field('image_for_swedish_language');?>" class="img-fluid" alt="Event Registration" />
                        <?php }
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- //Carousel Item --> 
         <?php  } ?> 
 <!-- <?php //endif; ?> -->
         <?php endwhile;?> 
      </div>
  <!--    <a class="carousel-control-prev wow bounceInDown"  data-wow-delay="0.05s" href="#bannerCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a> 
      <a class="carousel-control-next wow bounceInDown"  data-wow-delay="0.05s" href="#bannerCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a> -->
   </div>
</section>
<!-- End Banner/Slider -->
<!-- Function Section -->
<section class="section">
   <div class="container">
      <!-- Title -->
      <div class="title text-center wow bounceInDown rj"  data-wow-delay="0.05s">
         <h1><?php the_field('function_list_text_before_heading','19')?></h1>
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
         <!-- <div  class="loadmore btn btn-primary btn-main"><?php //the_field('load_4_more_functions','19') ?></div> -->
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
         <!--<p><?php the_field('right_service_text','19') ?></p>-->
         <?php
            $currentlang = get_bloginfo('language');
            if($currentlang=="en-GB"){
                                                ?> <a href="/en/dinkurs-webinars" class="btn btn-white">ATTEND A WEBINAR</a>
         <?php }
            else{ ?>
         <a href="/dinkurs-webinars" class="btn btn-white">DELTA I WEBINAR</a>
         <?php } ?>
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
      <div class="row">
         <div class="col-lg-12">
            <div class="title ref-title text-center wow bounceInDown"  data-wow-delay="0.05s">
               <h2><?php the_field('reference_customer_text','19')?></h2>
               <p><?php the_field('take_a_look_text','19')?></p>
            </div>
         </div>
      </div>
      <!--    <div class="row">
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
                         <?php echo get_field('slidertext'); ?>  </p> 
                        <div class="testi-name"><?php echo get_field('reference-customer-name') ?></div>
                       <div class="reference-company-name"><?php echo get_field('reference-company-name') ?></div>        
                   </div>
                         <?php $i++; ?>
                     <?php endwhile ?>
                 <?php endif ?>
                         
                     <?php wp_reset_postdata(); ?>
             </div>
         </div>
         </div> -->
      <?php
         $args = array(
             'post_type' => 'reference_customer',
         'posts_per_page'=>3,
             'orderby' => 'menu_order title',
             'order'   => 'ASC',
         'count' => 3
         );
         $query = new WP_Query( $args );
         ?>
      <div class="container">
         <div class="row">
            <?php if($query->have_posts()) : ?>
            <?php $i = 0; ?>
            <?php while($query->have_posts()) : $query->the_post() ?>
            <div id="refrence-cus-id" class="col-lg-4 col-md-6 col-sm-12">
               <div class="articleList custom-article-list">
                  <div class="arrow-icon">
                     <img src="<?php echo get_stylesheet_directory_uri();?>/images/arrow-test.svg">
                  </div>
                  <div class="reference-customer-image custom-reference-customer-image">
                     <img src="<?php echo get_field('reference-customer-image')?>" alt="HELLO" class="img-responsive"> 
                  </div>
                  <div class="detail custom-test-detail">
                     <p><?php 
                        echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 45 ) ); ?></p>
                  </div>
                  <div class="entry-content custom-entry-content mar-top">
                     <a href="<?php the_permalink();?>"  class="refread">
                     <?php the_field('fuction_list_read_more_text_','19') ?>
                     </a>
                  </div>
                  <div class="info custom-test-info"> 
                     <span class="reference-customer-name"><?php echo get_field('reference-customer-name') ?></span> 
                     <span class="reference-company-name"><?php echo get_field('reference-company-name') ?></span> 
                  </div>
               </div>
            </div>
            <?php $i++; ?>
            <?php endwhile ?>
            <?php endif ?>
         </div>
      </div>
      <?php wp_reset_postdata(); ?>
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
<!-- ./ Refrence Customer Section -->
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
                  <?php echo the_post_thumbnail();?>
               </div>
               <div class="detail">
                  <h4><?php the_title(); ?></h4>
                  <p><?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 15 ) ); ?></p>
                  <a href="<?php the_permalink(); ?>"><?php the_field('read_more_text','19');?></a>
               </div>
            </div>
         </div>
         <?php
            endwhile;
            ?>
      </div>
      <!-- Button -->
      <div class="button text-center mt-5 visit_demosite_text_button">
         <a href="#" class="btn btn-primary btn-main"><?php the_field('visit_demosite_text','19')?></a>       
      </div>
      <!-- //Button -->
   </div>
</section>
<!-- END Article Section -->

<!-- SLIDER POP UP FORM -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-bannersubcription">
        <div class="modal-content">
		<!-- MOdal Header -->
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Create your dinkurs trial</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		 </div>
            <!-- Modal Body -->    
            <div class="modal-body">
                
                              <form action="#" onsubmit= "return validation('form_id<?php echo get_the_ID(); ?>')" name="post_id<?php echo get_the_ID(); ?>" id="form_id<?php echo get_the_ID(); ?>">
                                 <div class="post_id<?php echo get_the_ID(); ?>" id="odd_btn_id">
								<div class="form-group">	
									<label class="control-label">Name *</label>		
									<input class="form-control" type="text" id="fulln" name="fullname" placeholder="NAME" required> 
								</div>	
								<div class="form-group">
									<label class="control-label">Email *</label>									
									<input class="form-control input2 popemail" type="email" id="term" name="email_address" placeholder="EMAIL" required>
								</div>	
								<div class="form-group">	
									<label class="control-label">Phone *</label>										
									<input type="tel" class="form-control" autocomplete="nope" id="telep" maxlength="25" name="telephone" placeholder="Enter a phone number" required="required" tabindex="0">	 
                                 </div> 
								 <div class="form-button text-center"> 
					 <button class="btn btn-primary g-recaptcha" data-callback='onClick'   id="postid<?php echo get_the_ID(); ?>"><?php the_field('banner_email_button_name','19');?></button> 
</div>					 
                              </form>  
                           </div> 
          
        </div>
    </div>
</div> 
</div>


<?php
get_footer();