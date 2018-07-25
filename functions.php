<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 24/07/2018
 * Time: 11:16
 */

//Add scripts and stylesheets
function customTheme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.2' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.1.2', true );
}

//import google fonts
function customTheme_google_fonts(){
    wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style( 'OpenSans');
}

//Custom settings
function custom_settings_add_menu(){
    add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}

// Create Custom Global Settings
function custom_settings_page() { ?>
    <div class="wrap">
        <h1>Custom Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'section' );
            do_settings_sections( 'theme-options' );
            submit_button();
            ?>
        </form>
    </div>
<?php }

//Twitter
function setting_twitter(){ ?>
    <input type="text" name="twitter" value="<?= get_option('twitter'); ?>" />
<?php }

//GitHub
function setting_github() { ?>
    <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

//Sets form
function custom_settings_page_setup() {
    add_settings_section( 'section', 'All Settings', null, 'theme-options' );

    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
    add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );

    register_setting('section', 'twitter');
    register_setting( 'section', 'github' );
}

add_action('wp_enqueue_scripts','customTheme_scripts');
add_action('wp_print_styles', 'customTheme_google_fonts');
add_theme_support('title-tag');
add_action('admin_menu', 'custom_settings_add_menu');
add_action('admin_init', 'custom_settings_page_setup');

//support featured images
add_theme_support('post-thumbnails');

//Create new image size for posts
    add_image_size('single-image', 350, 250);