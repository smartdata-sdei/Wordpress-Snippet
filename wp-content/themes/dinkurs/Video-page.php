<?php
/**
 * The front page template file
 * Template Name: Video Page
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

 <section class="section">
        <div class="banner-content align-items-center  customCarousel carousel slide" id="bannerCarousel"  data-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel Item -->
                <div class="carousel-item active">
                   <div class="container"> 
                        <?php
                         global $post;
                        $args = array( 'post_type' => 'video', 'post_status' => 'publish', 'posts_per_page' => 10 );
                        $loop = new WP_Query( $args ); ?>

                        <div id="my-posts">
                        <div class="row">
                         <?php
                          while ( $loop->have_posts() ) : $loop->the_post(); ?>

                           <div class="col-sm-6 col-xs-12">
                              
                                <div class="video">
                                <h4> <?php the_title();?></h4>
                                    <a href="#" data-toggle="modal" data-target="#videoModal" class="playBtn"><i class="fa fa-play"></i></a>
                                    <img src="<?php echo get_field('video_image');?>" class="img-fluid" alt="">
                                   <div class="detail">
                                    <p><?php the_content(); ?></p>
 
                                 </div> 
                               </div>
                
                              </div>

                            <?php
                              endwhile;
                            ?>
                            <?php wp_reset_query(); ?>
                               </div>
                
                              </div>
                       </div> 
    
                       <?php
                         global $post;
                        $args = array( 'post_type' => 'video', 'post_status' => 'publish', 'posts_per_page' => 10 );
                        $loop = new WP_Query( $args ); ?>

                        <div id="my-posts">
                         <?php
                          while ( $loop->have_posts() ) : $loop->the_post(); ?>

                              <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-video" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe src="<?php echo get_field("video_url");?>" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed embed-responsive-item" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                                        </div>
                                        
                                        <script src="https:////fast.wistia.net/assets/external/E-v1.js" async></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                              endwhile;
                            ?>
                            <?php wp_reset_query(); ?> 
        <!-- //Video Modal --> 
            </div>    
           </div>
          </div>
        </div>
</section>

<style type="text/css">
 .playBtn {

    width: 120px;
    height: 120px;
    background-color: rgba(0,150,136,0.9);
    color: white;
    border-radius: 60px;
    position: absolute;
    display: block;
    top: 35%;
    left: 50%;
    margin-top: -60px;
    margin-left: -60px;
    text-align: center;
    z-index: 1;
    transition: all 500ms ease-in-out;
    box-shadow: 3px 3px 4px rgba(0,0,0,0);
    cursor: pointer;

}   
.playBtn i {
    font-size: 66px;
    padding-left: .15em;
    line-height: 120px;
}
.video-top {
    margin-top: 30px;
}
.video h4{
font-size: 1.4rem;
font-weight: 600;
margin-bottom: 1rem;
color: #fff;    
}
.detail p {
padding-bottom: 25px;
line-height: 25px;
}
body{
    background:#00c6b7;
}
.playBtn:hover {
background-color: rgba(0,150,136,1.0);
box-shadow: 3px 3px 7px rgba(0,0,0,0.2);
transform: scale(1.1);
color: #fff;
}

</style>
<?php
get_footer();
