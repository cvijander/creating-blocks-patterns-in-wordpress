<?php
/**
 * Plugin Name: Creating Block Patterns
 * Plugin URI : http://linkedin.com/learning
 * Description : A collection of block patterns
 * Version: 1.0.0
 * Author:  Joe Casabona
 * Author URI:  https:/casabona.org/ 
 * Licence:  GPL-3.0+
 * Licence URI:  https://www.gnu.org/licences/gpl-2.0.txt
 * 
 */

 // If this file is called directly, abort 
 if ( ! defined ( 'WPINC' ) ) {
    die;
 }

 /**
  * Currently plugin version
  */
  define ('LIL_BP_VERSION', '1.0.0');

  /**
   * Plugin URL 
   */
  define ('LIL_BP_URL', plugin_dir_url ( __FILE__ ) );  //THis include the trailing slash!

  function lil_bp_add_styles() {
    wp_enqueue_style('lil-bp-styles', LIL_BP_URL . 'inc/lil-bp-styles.css');
  }

  add_action ('wp_enqueue_scripts', 'lil_bp_add_styles');

  require_once ('inc/patterns.php')






?>