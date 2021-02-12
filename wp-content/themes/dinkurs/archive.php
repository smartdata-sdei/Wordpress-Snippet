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

<!-- End Header Navigation -->
    <!-- Page Title -->
    <section class="pageTitle img-bck" >
        <div class="container">
            <h1 class="wow bounceInLeft"  data-wow-delay="0.05s"><?php the_field('blog_testfor_blog_page','415')?></h1>
            <ul class="breadcrumb wow bounceInRight"  data-wow-delay="0.05s">
                <li><?php breadcrumbs(); ?></li>
            </ul>
        </div>
    </section>
    <!-- //Page Title -->
    <!-- Article Section -->
    <section class="section eventSection">
        <div class="container">
            <h2 class="wow bounceInDown" data-wow-delay="0.05s"><?php the_field('sale_intelligencefor_blog_page','415')?></h2>
            <div class="row">
                <!-- Article Left Section -->
                <div class="col-md-8">
                    <!-- EVent Post -->
                     
                        <?php
                                $the_query = new WP_Query( array('posts_per_page'=>3,
                                                             'post_type'=>'post',
                                                             'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                                        ); 
                                
                                ?>
                                    
                                  <div class="test">                    
                                    
                                     <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                     
                                      <div class="file">
                                      <div class="eventPost wow bounceInLeft" data-wow-delay="0.05s">
                                       
                                        <div class="col-xs-12 file">
                                           
                                            <div class="blog-title"><?php echo get_the_title(); ?></div>
                                                  <div class="image">
                                                    <div class="img blog-image">
                                                        <?php echo the_post_thumbnail();?>  <!-- code to get the feature image -->
                                                    </div>
                                                   </div>

                                                 <div class="blog-content">
                                                    <?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 25 ) ); ?>
                                                 </div>

                                            <div class="entry-content">
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php the_field('read_more_textfor_blog_page','415')?></a>
                                            </div>
                                                </div>
                                                </div>
                                       </div>
                                        <?php
                                        endwhile;
                                        ?>
                                 </div>
                               
                                    <?php                        
                                     $big = 999999999; // need an unlikely integer
                                         
                                         ?> <div class="pagi-blog"> <?php echo paginate_links( array(
                                            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                            'format' => '?paged=%#%',
                                            'current' => max( 1, get_query_var('paged') ),
                                            'total' => $the_query->max_num_pages
                                        ) ); ?>
                                        </div>
                                           <?php 
                                        wp_reset_postdata();

                                 ?>
                           
                </div>
                <!-- //Article Left Section -->
                <!-- Right Section -->
                <div class="col-md-4">
                    <div class="rightSidebar">
                        <!-- Latest news Item -->
                        <div class="box wow bounceInRight"  data-wow-delay="0.05s">
                            <h2 class="title"><?php the_field('latest_blogfor_blog_page','415')?></h2>
                            <!-- News Item -->
                            <?php
                                $the_query = new WP_Query( array('posts_per_page'=>3,
                                                             'post_type'=>'post',
                                                             'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                                        ); 
                                                        ?>

                        
                                                   
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <div class="latestnewsItem clearfix">
                                <div class="detail-blog">
                                    <h4><a href="<?php echo get_permalink(); ?>" class="latest-news-title"><?php echo get_the_title(); ?></a></h4>
                                
                                </div>
                                <div class="blog-sidebar-img">
                                    <?php echo the_post_thumbnail();?> 
                                </div>
                                
                            </div>
                            <?php
                            endwhile;

                            wp_reset_postdata();

                        ?>
                            
                        </div>
                        <!-- //Latest news Item -->

                       
                    </div>
                </div>
                <!-- //Right Section -->
            </div>
            
        </div>
    </section>
    <!-- END Article Section -->
    <!-- Footer Section -->
<?php
get_footer();
