<?php
/**
 * The front page template file
 * Template Name: FAQ
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

<section class="toparea-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-headerandsearch">
                    <div class="faq-title">FAQ</div>
                    <form class="search-form" action="<?php echo home_url( '/' ); ?>">
                        <input class="search-box" type="search" name="s" placeholder="Search&hellip;">
                        <input class="sub-serch" type="submit" value="Sök">
                        <input type="hidden" name="post_type" value="custom-post-type">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reference-padding faq-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="shortcode-faq">
            <div class="container demo">
              <div class="bs-example">
                <div class="accordion" id="accordionExample">
                    <?php 
                        $args = array(
                            'post_type' => 'faq',
                        );  
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                        <div class="card">
                                <div class="card-header" id="headingOne">
                                    <span>
                                    <?php the_title(); ?>                                  
                                    </span>
                                    <button type="button" class="btn btn-link col-plus" data-toggle="collapse" data-target="#collapsed<?php the_Id(); ?>"><i class="fa fa-plus"></i> </button>
                                </div>
                                <div id="collapsed<?php the_Id(); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body faq-content">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile; wp_reset_query(); ?>

                </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();