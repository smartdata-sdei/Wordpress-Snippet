<?php

function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', '', '1.5',
        array('parent-style')
    );
}

/*code to add the admin dashboard css*/
function admin_style() {
  wp_enqueue_style('admin-styles', home_url().'/wp-content/themes/dinkurs/all_wp.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


/*code for active class for*/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/*to deactivate the gutanburg*/
 add_filter('use_block_editor_for_post', '__return_false');


/*acd pro to add option page*/
if( function_exists('acf_add_options_sub_pagee') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Custom Field Settings',
    'menu_title'  => 'Custom Field Settings',
    'menu_slug'   => 'custom-field-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'custom-field-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'custom-field-settings',
  ));
  
   acf_add_options_sub_page(array(
    'page_title'  => 'Theme Carosel Settings',
    'menu_title'  => 'Carosel',
    'parent_slug' => 'custom-field-settings',
  ));

   acf_add_options_sub_page(array(
    'page_title'  => 'Theme Reference Settings',
    'menu_title'  => 'Reference Customer',
    'parent_slug' => 'custom-field-settings',
  ));
}

/*custom user field code shown in user backend*/
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

/*custom Post Type */

/*for Homepage Banner */
function homebanner_post_type() {
  register_post_type( 'homepage_banner',
    array(
      'labels' => array(
        'name' => __( 'Home Banner' ),
        'singular_name' => __( 'Home Banner' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-format-gallery',
      'supports' => array( 'title', 'editor', 'thumbnail')
    )

  );
}
add_action( 'init', 'homebanner_post_type' );



/*for function list*/
function function_list_post_type() {
  register_post_type( 'function_list',
    array(
      'labels' => array(
        'name' => __( 'Function List' ),
        'singular_name' => __( 'Function List' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-book-alt',
      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
    )

  );
}
add_action( 'init', 'function_list_post_type' );


/*for owl carosel list*/
function reference_customer_post_type() {
  register_post_type( 'reference_customer',
    array(
      'labels' => array(
        'name' => __( 'Reference Customer' ),
        'singular_name' => __( 'Reference Customer' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-format-gallery',
      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
    )

  );
}
add_action( 'init', 'reference_customer_post_type' );

/*for  news list*/
// function news_post_post_type() {
//   register_post_type( 'news_post',
//     array(
//       'labels' => array(
//         'name' => __( 'News'),
//         'singular_name' => __( 'News' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'menu_icon'   => 'dashicons-images-alt',
//     )

//   );
// }
// add_action( 'init', 'news_post_post_type' );

/*for demo site*/
function demo_site_post_type() {
  register_post_type( 'demo_site',
    array(
      'labels' => array(
        'name' => __( 'Demo Site'),
        'singular_name' => __( 'Demo Site' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-admin-site',
      'supports' => array( 'title', 'editor', 'thumbnail')
    )

  );
}
add_action( 'init', 'demo_site_post_type' );


/*learn more */
/*for demo site*/
function learn_more_post_type() {
  register_post_type( 'learn_more',
    array(
      'labels' => array(
        'name' => __( 'Learn More'),
        'singular_name' => __( 'Learn More' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-portfolio',
    )

  );
}
add_action( 'init', 'learn_more_post_type' );

/*for Video site*/
function video_site_post_type() {
  register_post_type( 'video',
    array(
      'labels' => array(
        'name' => __( 'More Video'),
        'singular_name' => __( 'More Video' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-video-alt3',
    )

  );
}
add_action( 'init', 'video_site_post_type' );

/*for function list*/
function faq_post() {
  register_post_type( 'faq',
    array(
      'labels' => array(
        'name' => __( 'Faq' ),
        'singular_name' => __( 'Faq' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-book-alt',
      'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
    )

  );
}
add_action( 'init', 'faq_post' );


/*About Us Page TEam Section*/
function team_post_type() {
  register_post_type( 'about_team',
    array(
      'labels' => array(
        'name' => __( 'About Team'),
        'singular_name' => __( 'About Team' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-admin-users'
      // 'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
    ) 
  );
}
add_action( 'init', 'team_post_type' );

/*  Section*/
function pricing_post_type() {
  register_post_type( 'pricing_plan',
    array(
      'labels' => array(
        'name' => __( 'Pricing Plan'),
        'singular_name' => __( 'Pricing Plan' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-media-spreadsheet'
      // 'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
    ) 
  );
}
add_action( 'init', 'pricing_post_type' );


/*code for breadcrum*/
function breadcrumbs($id = null){
?>
<div id="breadcrumbs">
    <a href="<?php bloginfo('url'); ?>">Home</a> /
    <?php if(!empty($id)): ?>
    <a href="<?php echo get_permalink( $id ); ?>" ><?php echo get_the_title( $id ); ?></a> >
    <?php endif; ?>
    <span class="breadcrumb_last"><?php the_title(); ?></span>
</div>
<?php }
/*End breadcrum code*/

/*ajax*/
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

/*for load more post */
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'function_list',
        'post_status' => 'publish',
        'posts_per_page' => '4',
        'paged' => $paged,
    );

    $my_posts = new WP_Query( $args );

    if ( $my_posts->have_posts() ) :
        ?>
        <?php while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>
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
                    <p><?php echo get_field("front_page_text"); ?></p> <!-- 25 is the no of words to show -->
                        <div class="entry-content">
                            <a href="<?php the_permalink(); ?>"><?php the_field('fuction_list_read_more_text_','19') ?></a>
                            </div>
                        </div>
                        <!-- //Text -->
                    </div>
                </div>
        <?php endwhile; ?>
        <?php
    endif;
 
    wp_die();
}

 





