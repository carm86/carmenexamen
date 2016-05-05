<?php
register_nav_menus( array(
	'mobile_menu'   => 'Menu for smartphone and tablet, at top of page',
	'top_menu'      => "Main nav menu at top of the page",
    'footer_menu'   => "footer-menu",
    'primary' => __( 'Primary Menu', 'Carmenpremium' )
));

//hämtar
require_once('wp_bootstrap_navwalker.php');



//add to the Appearance in Wordpress
add_theme_support('custom-background');

//add post-thumnails to the pages
add_theme_support( 'post-thumbnails' );

//add formats in posts
add_theme_support('post-formats', array('aside', 'image', 'video'));


//REQUIERS

// require_once 'lib/cp-xxxxxx.php';


// HOOKS

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_styles(){       
    wp_enqueue_style( 'prefix-slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css', array(), '1.5.9' );
	wp_enqueue_style( 'prefix-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css', array(), '3.3.2' );
	wp_enqueue_style( 'prefix-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '4.2.0' );
	wp_enqueue_style( 'sidr', get_template_directory_uri() . '/assets/styles/components/jquery.sidr.light.css' );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/styles/components/flexslider.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/styles/styles.css' );
}

?>

<?php
    function sidebar_widget_setup(){
    register_sidebar(
        array(
        'name'	=> 'Sidebar',
        'id'	=> 'sidebar-1',
        'class'	=> 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
        )
);
    }

add_action('widgets_init','sidebar_widget_setup');


// Woocommerce

/*
 * Add basic WooCommerce template support
 *
 */

// First let's remove original WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// Now we can add our own, the same used for theme Pages
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


//Custom Post type
// Register  'team post type

function team_post_type(){

    //labels
    $labels = array(

        'name' => _x("Team", "post type general name"),
        'singular_name' => _x("Team", "post type singular name"),
        'menu_name' => 'Team',
        'add_new' => _x("Add New", "team item"),
        'add_new_item' => __("Add New Profile"),
        'edit_item' => __("Edit Profile"),
        'new_item' => __("New Profile"),
        'view_item' => __("View Profile"),
        'search_item' => __("Search Profiles"),
        'not_found' => __("No Profiles Found"),
        'not_found_in_trash' => __("No Profiles Found in Trash"),
        'parent_item_colon' => ''
    );

    //Register post type
    register_post_type('team', array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-admin-users',
        'rewrite' => false,
        'supports' => array('title', 'editor', 'thumbnail')

    ));
}

add_action('init', 'team_post_type', 0);


/**
 * Register `department` taxonomy
 */
function team_taxonomy() {

    // Labels
    $singular = 'Department';
    $plural = 'Departments';
    $labels = array(
        'name' => _x( $plural, "taxonomy general name"),
        'singular_name' => _x( $singular, "taxonomy singular name"),
        'search_items' =>  __("Search $singular"),
        'all_items' => __("All $singular"),
        'parent_item' => __("Parent $singular"),
        'parent_item_colon' => __("Parent $singular:"),
        'edit_item' => __("Edit $singular"),
        'update_item' => __("Update $singular"),
        'add_new_item' => __("Add New $singular"),
        'new_item_name' => __("New $singular Name"),
    );

    // Register and attach to 'team' post type
    register_taxonomy( strtolower($singular), 'team', array(
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => false,
        'labels' => $labels
    ) );
}
add_action( 'init', 'team_taxonomy', 0 );


?>




