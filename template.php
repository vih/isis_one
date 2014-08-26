<?php
/**
 * @file
 * Theme functions
 */

require_once dirname(__FILE__) . '/includes/structure.inc';
require_once dirname(__FILE__) . '/includes/comment.inc';
require_once dirname(__FILE__) . '/includes/form.inc';
require_once dirname(__FILE__) . '/includes/menu.inc';
require_once dirname(__FILE__) . '/includes/node.inc';
require_once dirname(__FILE__) . '/includes/panel.inc';
require_once dirname(__FILE__) . '/includes/user.inc';
require_once dirname(__FILE__) . '/includes/view.inc';

/**
 * Implements hook_css_alter().
 */
function isis_one_css_alter(&$css) {
  $radix_path = drupal_get_path('theme', 'radix');

  // Radix now includes compiled stylesheets for demo purposes.
  // We remove these from our subtheme since they are already included 
  // in compass_radix.
  unset($css[$radix_path . '/assets/stylesheets/radix-style.css']);
  unset($css[$radix_path . '/assets/stylesheets/radix-print.css']);
}

function isis_one_preprocess_html(&$variables) {
    // CORE FILES
    // drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/jquery/jquery-1.10.2.min.js', array('type' => 'file', 'scope' => 'footer'));
    // drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/jquery.isotope.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/masonry.js', array('type' => 'file', 'scope' => 'footer'));

    // PLUGINS
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/jquery-fitvids/jquery.fitvids.min.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/jquery-appear/jquery.appear.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/superslides/dist/jquery.superslides.min.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/jquery-owl-carousel/owl.carousel.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/carouFredSel/jquery.carouFredSel-6.2.1-packed.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/jquery-countTo/jquery.countTo.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/magnific-popup/jquery.magnific-popup.min.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/jquery.mb.YTPlayer.js', array('type' => 'file', 'scope' => 'footer')); // Youtube video background
    // drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/plugins/holder.js', array('type' => 'file', 'scope' => 'footer')); // delete on production

    // JS SCRIPTS
    drupal_add_js(drupal_get_path('theme', 'isis_one') . '/assets/js/scripts.js', array('type' => 'file', 'scope' => 'footer')); // delete on production
}

/**
 * Implements template_preprocess_page().
 */
function isis_one_preprocess_page(&$variables) {
  // Add copyright to theme.
  if ($copyright = theme_get_setting('copyright')) {
    $variables['copyright'] = check_markup($copyright['value'], $copyright['format']);
  }
}
