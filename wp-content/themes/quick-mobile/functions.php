<?php
add_action('wp_head', 'ajaxurl');

function ajaxurl() {
    ?>
    <script type="text/javascript">
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <?php
}

function enque_styleAndScripts() {
    wp_enqueue_style('FontAwesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('ChildThemeResponsive', get_stylesheet_directory_uri() . '/css/responsive-style.css');
//    wp_enqueue_script('customChildScripts', get_stylesheet_directory_uri() . '/js/customChildScripts.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'enque_styleAndScripts', 10);
if (!function_exists('cpotheme_footer')) {

    function cpotheme_footer() {
        echo '<div class="footer-content">';
        echo '&copy; ' . get_bloginfo('name') . ' ' . date('Y') . '. ' . sprintf(__('', 'allegiant'), esc_url(CPOTHEME_PREMIUM_URL), esc_attr(CPOTHEME_NAME));
        echo '</div>';
    }

}


//Custom post type testmonials
add_action('init', 'registerCustomPostTypeLocation');

function registerCustomPostTypeLocation() {

    $labels = array(
        'name' => __('locatioans', 'text_domain'),
        'singular_name' => __('locatioan', 'text_domain'),
        'add_new' => _x('Add New', '${4:Name}', 'text_domain'),
        'add_new_item' => __('Add New', 'text_domain}'),
        'edit_item' => __('Edit', 'text_domain'),
        'new_item' => __('New', 'text_domain'),
        'view_item' => __('View', 'text_domain'),
        'search_items' => __('Search', 'text_domain'),
        'not_found' => __('No locatioan found', 'text_domain'),
        'not_found_in_trash' => __('No locatioan found in Trash', 'text_domain'),
        'parent_item_colon' => __('Parent locatioan:', 'text_domain'),
        'menu_name' => __('Locatioans', 'text_domain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        //'menu_icon'         => '',
        'show_in_nav_menus' => true,
        'publicly_queryable' => FALSE,
        'exclude_from_search' => FALSE,
        'has_archive' => FALSE,
        'query_var' => FALSE,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'thumbnail'),
    );

    register_post_type('locatioan', $args);
}

//Displays the post image on listings and blog posts
if (!function_exists('cpotheme_postpage_image')) {

    function cpotheme_postpage_image() {
        if (has_post_thumbnail()) {
            if (!is_singular('post')) {
                echo '<a href="' . get_permalink(get_the_ID()) . '" title="' . sprintf(esc_attr__('Go to %s', 'allegiant'), the_title_attribute('echo=0')) . '" rel="bookmark">';
                the_post_thumbnail('portfolio');
                echo '</a>';
            } else {
                the_post_thumbnail();
            }
        }else{
            echo '<a href="' . get_permalink(get_the_ID()) . '" title="' . sprintf(esc_attr__('Go to %s', 'allegiant'), the_title_attribute('echo=0')) . '" rel="bookmark">';
                the_post_thumbnail('portfolio');
                echo "<img src='".  get_stylesheet_directory_uri()."/images/no-image.jpg'/>";
                echo '</a>';
            
        }
    }

}
?>