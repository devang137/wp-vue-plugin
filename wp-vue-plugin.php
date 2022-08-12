<?php
/**
 * Plugin Name:       dev-vue-wp-plugin
 * Description:       Vue js with WordPress plugin.
 * Version:           1.1.0
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       devtest
 */

/**
 * Admin Menu.
 *
 * @return void
 */
add_action( 'admin_menu', 'dev_menu' );
function dev_menu() {
    add_menu_page( __( 'Vue app', 'devtest'), __( 'Vue app', 'devtest'), 'manage_options', 'devtest', 'devtest_admin_page', 'dashicons-admin-post', '2.1' );
}

/**
 * Admin Page.
 *
 * @return void
 */
function devtest_admin_page() {
    echo "<div id='app'></div>"; 
}

/**
 * Enqueue scripts
 *
 * @return void
 */
add_action( 'admin_enqueue_scripts', 'devtest_admin_enqueue_scripts' );
function devtest_admin_enqueue_scripts() {
    wp_enqueue_script( 'devtest-script', plugin_dir_url( __FILE__ ) . 'dist/build.js', array(), '1.0.0', true );
}
