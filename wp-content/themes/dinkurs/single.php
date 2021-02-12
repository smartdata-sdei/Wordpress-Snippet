<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<section class="section blogpostPage bgGray">
	
	<div class="container">
		<?php
			/* Start the Loop */
			while ( have_posts() ) :
			the_post();
		?>
		
		<?php
			if("function_list" == get_post_type() ){ ?>
                <div class="function-list-heading"><?php the_field("function_list_heading","19")?></div>
			<?php }
			else{

			}
		    ?>
		<div class="title text-center">
			<h2 class="text-uppercase wow bounceInDown" data-wow-delay="0.1s"><?php the_title(); ?></h2>
			<p></p>
			
			<div class="date">
			<?php
			if("post" == get_post_type() ){
                echo get_the_date(); 
			}
			else{

			}
		    ?>
			
			</div>
		</div>
      	
	      <center>
			<div class="resource-image">
	           <?php echo the_post_thumbnail();?>
			</div>
			  <div id="stick-here" style="transform: translateY(-100px);"></div>			  
	      </center>
        <div class="blogs-detail">
		  	<div class="icon-bar">
				  <!-- <a href="<?php //the_field('facebook-url','677');?>"><i class="fab fa-facebook-f"></i></a>
				  <a href="<?php //the_field('linkedin-url','677');?>"><i class="fab fa-linkedin-in"></i></a> -->
				  <?php echo do_shortcode('[shared_counts]'); ?>
   			</div>
	        <div class="blog-detail">	
	          <?php the_content(); ?>
	        </div>
		</div>
		<?php endwhile; // End of the loop. ?>
<?php
if("function_list" == get_post_type() ){?>
<!-- Realted Post -->
	<div class="relatedPost">
		<h3><?php the_field("releted_post_text_for_function_list","19")?></h3>  
			<div class="row">
				<?php 
					$the_query = new WP_Query( array('posts_per_page'=>3,
						'post_type'=>'function_list',
						'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
					); 
				?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				
				<div class="col-md-4 wow bounceInUp"  data-wow-delay="0.1s">
					<a href="<?php echo get_permalink();?>">
					<div class="item">
						<div class="img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
					    </div>
					<h4 style="color:#333333"><?php the_title(); ?></h4>
					<div class="date" style="color:#333333"><?php echo get_field("front_page_text"); ?></div>
					</div>  
					</a>  
				</div>
				<?php endwhile; ?>
			</div>
	</div>
	<!-- //Realted Post -->

<?php }

elseif("reference_customer" == get_post_type() ){ ?>

<!-- <div class="relatedPost">
		<h3><?php the_field('reference_customer_text','19')?></h3>  
			<div class="row">
				<?php 
					$the_query = new WP_Query( array('posts_per_page'=>3,
						'post_type'=>'reference_customer',
						'orderby'   => 'rand',
						'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
					); 
				?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				
				<div class="col-md-4 wow bounceInUp"  data-wow-delay="0.1s">
					<a href="<?php echo get_permalink();?>">
					<div class="item">
						<img src="<?php echo get_field('reference-customer-image')?>" alt="HELLO" class="img-responsive refeimg"> 
					<div class="refetitle"><?php the_title(); ?></div>
					</div>  
					</a>  
				</div>
				<?php endwhile; ?>
			</div>
	</div> -->

<div class="relatedPost">
		<h3><?php the_field('reference_customer_text','19')?></h3>  
		<?php
                                $args = array(
                                    'post_type' => 'reference_customer',
                                    'orderby' => 'menu_order title',
									'order'   => 'ASC',
									'posts_per_page'=>3,
									'orderby'   => 'rand'
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
	</div>

<?php }

else{ ?>
	<div class="relatedPost">
		<h3><?php the_field("releted_post_text","19")?></h3>  
			<div class="row">
				<?php 
					$the_query = new WP_Query( array('posts_per_page'=>3,
						'post_type'=>'post',
						'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
					); 
				?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				
				<div class="col-md-4 wow bounceInUp"  data-wow-delay="0.1s">
					<div class="item">
						<div class="img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
					    </div>
					<h4><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h4>
					<!-- <div class="date"><?php //echo get_the_date();?> / <?php //the_author(); ?></div> -->
					<!-- <div class="date" style="display: none;"><?php //echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 10 ) ); ?></div> -->
					<div class="date"><?php echo get_field('front-content'); ?></div>
					</div>    
				</div>
				<?php endwhile; ?>
			</div>
	</div>
<?php }
?>
	
</div>  
</section>

<script>

  function sticktothetop() {
    var window_top = $(window).scrollTop();
    var top = $('#stick-here').offset().top;
    if (window_top > top) {
        $('.blogs-detail').addClass('stick');
        $('#stick-here').height($('#stickThis').outerHeight());
    } else {
        $('.blogs-detail').removeClass('stick');
        $('#stick-here').height(0);
    }
}
jQuery(function() {
    jQuery(window).scroll(sticktothetop);
    sticktothetop();
});
</script>


<?php
get_footer();
