<?php
/**
 * Plugin Name: magicnumber
 * Plugin URI: https://codesign82.com/magicnumber
 * Description: calculate magic number
 * Version: 1.0
 * Author: Codesign
 * Author URI: https://codesign82.com/
 */

/*************************************
 * ADD SCRIPTS & STYLES
 **************************************/
function magicnumber_enqueue_script() {
//  wp_enqueue_script('gsap', plugin_dir_url(__FILE__) . '/assets/js/gsap.min.js');
//  wp_enqueue_script('scripts', plugin_dir_url(__FILE__) . '/assets/js/scripts.js',['gsap','draw-svg']);
//  wp_enqueue_script('draw-svg', plugin_dir_url(__FILE__) . '/assets/js/drawSVGPlugin.js',['gsap']);
  wp_enqueue_script('wp-util');

//  wp_enqueue_style('styles', plugin_dir_url(__FILE__) . '/assets/style/style.css');
}
add_action('wp_enqueue_scripts', 'magicnumber_enqueue_script');
function jquery_enqueue_script() {
  wp_enqueue_script('jquery');
}
add_action('init', 'jquery_enqueue_script');
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Add "Custom" template to page attirbute template section.
 */
function add_template_to_select($post_templates, $wp_theme, $post, $post_type)
{

    // Add custom template named magicnumber-template.php to select dropdown
    $post_templates['magicnumber-template.php'] = __('Magic Number Template');

    return $post_templates;
}

add_filter('theme_page_templates', 'add_template_to_select', 10, 4);

/**
 * Check if current page has our custom template. Try to load
 * template from theme directory and if not exist load it
 * from root plugin directory.
 */
function load_plugin_template($template)
{

    if (get_page_template_slug() === 'magicnumber-template.php') {

        if ($theme_file = locate_template(array('magicnumber-template.php'))) {
            $template = $theme_file;
        } else {
            $template = plugin_dir_path(__FILE__) . 'magicnumber-template.php';
        }
    }

    if ($template == '') {
        throw new \Exception('No template found');
    }

    return $template;
}

add_filter('template_include', 'load_plugin_template');





/* AJAX Callback */
add_action('wp_ajax_send_results_email', function () {
    if (!isset($_POST['result'])) {
        wp_send_json_error([$_POST['result'], $_POST['email']]);
    }
    $result = $_POST['result'];
    $email = $_POST['email'];
    $from = 'steve@tractionequity.com';
// To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
    $headers .= 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $message = "
<H2>Welcome $email</H2>
<H1>Your Magic Number Is:</H1>
<H2>$result</H2>
";
    wp_mail($email, 'Magic Number Result', $message, $headers);
    wp_send_json_success(true);
});