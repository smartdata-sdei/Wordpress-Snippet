    <?php
/**
 * The front page template file
 * Template Name: Blog
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

<section id="featured-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12 p-sm-1">
                    <?php
                        $the_query = new WP_Query( array('posts_per_page'=>1,
                                                     'post_type'=>'post',
                                                     'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                                ); 
                        
                        ?>
                                    
                  <div class="row article-outer mt-5">               
                    
                     <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                     
                      <div class="col-lg-8 col-md-6 image-box">
                        <div class="blog-image-container-large position-relative">
                              <?php echo the_post_thumbnail();?>       
                        </div>
                     </div>

                     <div class="col-lg-4 col-md-6 text-box position-relative">
                        <h3 class="article-heading">
                            <?php echo get_the_title(); ?>
                        </h3>
                        <div class="short-text">
                         <?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 20 ) ); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="article-read-more"><?php the_field('read_more_textfor_blog_page','415')?> <i class="far fa-arrow-alt-circle-right"></i></a>
                     </div>

                        <?php
                        endwhile;
                        ?>
                 </div>
                
                </div>
            </div>

            
                <?php
                        $the_query = new WP_Query( array('posts_per_page'=>3,
                                                     'post_type'=>'post',
                                                     'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                                ); 
                        
                        ?>            
                <div class="row">    
                     <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                     
                <div class="col-lg-4 col-md-6">
                    <div class="article-outer small-article">
                            <div class="blog-post-article  image-box">
                                <div class="blog-image-container-large position-relative">
                                    <?php echo the_post_thumbnail();?>                              
                                </div>  
                            </div>
                            <div class="text-box position-relative">
                                <h3 class="article-heading">
                                    <?php echo get_the_title(); ?>
                                </h3>
                                <div class="article-short-text">
                                    <?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 20 ) ); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="article-read-more"><?php the_field('read_more_textfor_blog_page','415')?> <i class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                    </div>
                </div>

            <?php
            endwhile;
            ?>

            </div>
        </div>
    </section>


    <section id="otherblogs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-style">
                        <span><?php //the_field('other_blogs','415')?></span>
                        <h3><?php the_field('other_blogs_you_may_like','415')?></h3>
                    </div>                    
                </div>

            </div>

                <?php
                        $the_query = new WP_Query( array('posts_per_page'=>3,
                                                     'post_type'=>'demo_site',
                                                     'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                                ); 
                        
                        ?>            
                <div class="row">    
                     <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="article-outer small-article">
                                <div class="blog-post-article  image-box">
                                    <div class="blog-image-container-large position-relative">
                                        <?php echo the_post_thumbnail();?>                        
                                    </div>  
                                </div>
                                <div class="text-box position-relative">
                                    <h3 class="article-heading">
                                        <?php echo get_the_title(); ?>
                                    </h3>
                                    <div class="article-short-text">
                                        <?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 15 ) ); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="article-read-more"><?php the_field('read_more_textfor_blog_page','415')?> <i class="far fa-arrow-alt-circle-right"></i></a>
                                </div>
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
             </div>
        </div>
    </section>         
<?php
get_footer();                               
                          
                          

                        
                    

