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
        } else {
            echo '<a href="' . get_permalink(get_the_ID()) . '" title="' . sprintf(esc_attr__('Go to %s', 'allegiant'), the_title_attribute('echo=0')) . '" rel="bookmark">';
            the_post_thumbnail('portfolio');
            echo "<img src='" . get_stylesheet_directory_uri() . "/images/no-image.jpg'/>";
            echo '</a>';
        }
    }

}
?>



<!--Add New Menu Entry-->

<?php
// create custom plugin settings menu
add_action('admin_menu', 'headerTopStoreInfoMenu');
function headerTopStoreInfoMenu() {
    //create new top-level menu
    add_menu_page('Header Top Store Locations Info', 'Header Top Info', 'administrator', __FILE__, 'headerTopStoreInfoMenuPage','');

    //call register settings function
    add_action('admin_init', 'register_my_cool_plugin_settings');
}

function register_my_cool_plugin_settings() {
    //register our settings
    register_setting('top-header-locations-info-group', 'HTOP_Loc_Central_Phoenix');
    register_setting('top-header-locations-info-group', 'HTOP_Loc_Fountain_Hills');
    register_setting('top-header-locations-info-group', 'HTOP_Loc_North_Phoenix');
    register_setting('top-header-locations-info-group', 'HTOP_Loc_Peoria');
    register_setting('top-header-locations-info-group', 'HTOP_Loc_Scottsdale');
}

function headerTopStoreInfoMenuPage() {
    ?>
    <div class="wrap">
        <h1>Header Top Location Info</h1>
        <form method="post" action="options.php">
    <?php settings_fields('top-header-locations-info-group'); ?>
    <?php do_settings_sections('top-header-locations-info-group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Central Phoenix</th>
                    <td><input style="width: 100%;" required="" type="text" name="HTOP_Loc_Central_Phoenix" value="<?php echo esc_attr(get_option('HTOP_Loc_Central_Phoenix')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Fountain Hills</th>
                    <td><input style="width: 100%;" required=""  type="text" name="HTOP_Loc_Fountain_Hills" value="<?php echo esc_attr(get_option('HTOP_Loc_Fountain_Hills')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">North Phoenix</th>
                    <td><input style="width: 100%;" required=""  type="text" name="HTOP_Loc_North_Phoenix" value="<?php echo esc_attr(get_option('HTOP_Loc_North_Phoenix')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Peoria</th>
                    <td><input style="width: 100%;" required=""  type="text" name="HTOP_Loc_Peoria" value="<?php echo esc_attr(get_option('HTOP_Loc_Peoria')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Scottsdale</th>
                    <td><input style="width: 100%;" required=""  type="text" name="HTOP_Loc_Scottsdale" value="<?php echo esc_attr(get_option('HTOP_Loc_Scottsdale')); ?>" /></td>
                </tr>
            </table>
    <?php submit_button(); ?>
        </form>
    </div>
<?php } ?>