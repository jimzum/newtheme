<?php
/**
 * Child theme functions.
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '-child/style.css' );
}

add_action('wp_enqueue_scripts','child_wptf');
function child_wptf(){
    if (is_page_template('page-home.php')) {
        wp_enqueue_script('child-script', '/wp-content/plugins/hybrid-composer/scripts/parallax.min.js');
        wp_enqueue_script('child-script-2', '/wp-content/plugins/hybrid-composer/scripts/jquery.tab-accordion.js');
        wp_enqueue_script('child-script-3', '/wp-content/plugins/hybrid-composer/scripts/jquery.magnific-popup.min.js');
        wp_enqueue_style('child-css', '/wp-content/plugins/hybrid-composer/css/content-box.css');
        wp_enqueue_style('child-css-2', '/wp-content/plugins/hybrid-composer/css/components.css');
        wp_enqueue_style('child-css-3', '/wp-content/plugins/hybrid-composer/scripts/magnific-popup.css');
    }
    wp_enqueue_style('child-css-icons', '/wp-content/plugins/hybrid-composer/admin/icons/icons.css');
}




function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 150);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));

return $excerpt;
}