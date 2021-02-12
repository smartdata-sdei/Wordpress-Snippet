    <?php
/**
 * The front page template file
 * Template Name: Reference Customer
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

<?php 
	$Pid = get_the_ID();
	$value = get_field('background_imagesss',$Pid);
?>
	<div class="pageTitle about-banner" style="background: url(<?php
												 if( $value ):
													the_field('background_imagesss',$Pid); 
												else : 		   
											   echo the_field('background_image','2029'); 
											   endif;
											   ?>">
		<div class="container">
			<div class="about-banner-content">
				 <h2><?php echo the_field('webinar_titlesss',$Pid); ?></h2>
			<p><?php echo the_field('webinat_subtitlesss',$Pid); ?></p>
			</div>
		</div>
	</div> 

 <!-- Banner/Slider -->
    <section class="reference-padding">
       <div class="container-fluid">   
          <div class="title">
             <h1><?php the_field('reference_customer_text','19')?></h1>
          </div>
                            <?php
                                $args = array(
                                    'post_type' => 'reference_customer',
                                    'orderby' => 'menu_order title',
                                    'order'   => 'ASC',
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

    <div class="relatedPost reference-width">
    <h3><?php the_field("releted_post_text","19")?></h3>  
      <div class="row">
        <?php 
          $the_query = new WP_Query( array('posts_per_page'=>3,
            'post_type'=>'reference_customer',
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
          ); 
        ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        
        <div class="col-md-4 wow bounceInUp"  data-wow-delay="0.1s">
          <a href="<?php echo get_permalink();?>">
          <div class="item">
            <div class="img" style="background-image: url('<?php echo get_field('reference-customer-image')?>');">
              </div>
          <h4 style="color:#333333"><?php the_title(); ?></h4>
          <div class="date" style="color:#333333">
            <?php 
           echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 15 ) ); 
           ?>
          </div>
          </div>  
          </a>  
        </div>
        <?php endwhile; ?>
      </div>
  </div>  
		
    </section>


    <!-- END Article Section -->
<?php
get_footer();
