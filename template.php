<?php

/**
 * Preprocesses the wrapping HTML.
 *  Disable IE compatible mode
 *  Adding fix-ie.css
 *
 * @param array &$variables
 *   Template variables.
 */
function scratch_preprocess_html(&$vars) {
  $meta_tags = array (
    'ie_render_engine' => array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array(
        'http-equiv' => 'X-UA-Compatible',
        'content' =>  'IE=edge,chrome=1',
      ),
      '#weight' => '-99999',
    ),
    'viewport' => array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array(
        'name' => 'viewport',
        'content' =>  'width=device-width, initial-scale=1',
      )
    ),
  );

  foreach($meta_tags as $meta_tag_name => $meta_tag_array) {
    drupal_add_html_head($meta_tag_array, $meta_tag_name);
  }

  // Add conditional IE Fix.
  drupal_add_css(path_to_theme() . '/css/fix-ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
}

/**
 * Returns HTML for a breadcrumb trail.
 *
 * Override the dfault breadcrumb function from as defined in includes/theme.inc
 *
 * @param $variables
 *   An associative array containing:
 *   - breadcrumb: An array containing the breadcrumb links.
 */
function scratch_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
// Provide a navigational heading to give context for breadcrumb links to
// screen-reader users. Make the heading invisible with .element-invisible.
    //dpm($breadcrumb);
    $output = '<div class="breadcrumb">';
    $output .= implode(' » ', $breadcrumb);
    $output .= '</div>';
    return $output;
  }
}
