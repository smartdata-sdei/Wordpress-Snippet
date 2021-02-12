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
<section class="section blogpostPage demoPage">
	
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
			  
			<div class="bottomText">
				 <?php the_field("textarea_content")?>
	        </div>
		</div>
		</div>
		</div>
		 <!--<div class="slider-2 bgGray"><div class="container"><?php echo do_shortcode('[metaslider id="1906"]'); ?></div></div>-->
		 <div class="slider bgGray"><div class="container"><?php the_field("slider_code")?></div> </div> 
		
		<?php endwhile; // End of the loop. ?>
	
	<div class="container">
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

<div class="relatedPost">
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
