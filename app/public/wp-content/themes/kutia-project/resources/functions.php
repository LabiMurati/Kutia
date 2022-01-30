<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__ . '/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__) . '/config/assets.php',
            'theme' => require dirname(__DIR__) . '/config/theme.php',
            'view' => require dirname(__DIR__) . '/config/view.php',
        ]);
    }, true);

// IMAGE SIZES
add_image_size('big', 2560, 999999);

function limit($value, $limit = 100, $end = '...')
{
    if (mb_strlen($value) <= $limit) return $value;
    return mb_substr($value, 0, $limit) . $end;
}

function fix_post_id_on_preview($null, $post_id)
{
    if (is_preview()) {
        return get_the_ID();
    }
}
function university_features() {
    register_nav_menu('footer-drop','drop-down');
    register_nav_menu('footerLocationTwo','Footer Location two');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); //Qekjo na mundeson qe me shtu nje thumbnail -> Foto qe me bo upload madnej e thirr me kod  php the_post_thumbnail_url(); 
    add_image_size('professorLanscape' ,400,260,true); //Qekjo na krijon edhe rezulucione te tjera te fotove pra per portret landscape etc.
    add_image_size('professorPortrait' , 480 ,650 , true);
    add_image_size('pageBanner' , 1500 , 350 , true);
}
function my_id_attribute ($atts, $item, $args) {
    //develop your anchor tag ID nomenclature I'll call it $id
    $atts['id'] = $id;
    return $atts;
    }
  add_filter('nav_menu_link_attributes', 'my_id_attribute', 10, 3);

add_filter('acf/pre_load_post_id', 'fix_post_id_on_preview', 10, 2);
add_action('after_setup_theme' , 'university_features');

