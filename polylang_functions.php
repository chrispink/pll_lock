function admin_hide_language() {
    $screen = get_current_screen();
    // load only when  not when making a new post.
    if (  'add' !== $screen->action ) {
        wp_enqueue_script('hide-language', get_template_directory_uri().'/js/pll.js', array('jquery'),null, true);
    }
}

add_action('admin_enqueue_scripts', 'admin_hide_language');

function extra_admin_style() {
    wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/css/admin-style.css' );
}
