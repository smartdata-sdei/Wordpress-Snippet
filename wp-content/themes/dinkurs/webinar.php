<?php
/**
 * The front page template file
 * Template Name: Webinar
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
<style>section.banner {
    display: none;
}</style>
<div class="about-main webinar-page">
	<div class="pageTitle about-banner" style="background: url(<?php echo the_field('background_image','2029'); ?>">
		<div class="container">
			<div class="about-banner-content">
				 <h2><?php echo the_field('webinar_title','2029'); ?></h2>
			<p><?php echo the_field('webinat_subtitle','2029'); ?></p>
			</div>
		</div>
	</div> 
	<div class="typo-section pad-outer">
	   <div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="typo-left">
						<?php echo the_field('first_column','2029'); ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="typo-right"> 
						<?php echo the_field('second_column','2029'); ?>
					</div>
				</div>
			</div>
	   </div>
	</div>
      
        
     
        <section class="section bgGray content-text">
    <div class="container"> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>    </div>
</section>
 


<?php
get_footer();
