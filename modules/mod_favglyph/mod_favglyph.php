<?php

/**
*   FavGlyph
*
*   Responsive and customizable Joomla!3 module
*
*   @version        1.4
*   @link           http://extensions.favthemes.com/favglyph
*   @author         FavThemes - http://www.favthemes.com
*   @copyright      Copyright (C) 2015 FavThemes.com. All Rights Reserved.
*   @license        Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access

defined('_JEXEC') or die;

$jquery_load                            = $params->get('jquery_load');
$layout_effect                          = $params->get('layout_effect');
$icon_width                             = $params->get('icon_width');
$icon_border_radius                     = $params->get('icon_border_radius');
$icon_border_type                       = $params->get('icon_border_type');
$icon_border_width                      = $params->get('icon_border_width');
$title_google_font                      = $params->get('title_google_font');
$title_font_size                        = $params->get('title_font_size');
$title_margin                           = $params->get('title_margin');
$description_font_size                  = $params->get('description_font_size');

for ($j=1;$j<7;$j++) {

${'show_icon'.$j}                       = $params->get('show_icon'.$j);
${'icon_layout'.$j}                     = $params->get('icon_layout'.$j);
${'icon_name'.$j}                       = $params->get('icon_name'.$j);
${'icon_color'.$j}                      = $params->get('icon_color'.$j);
${'icon_bg_color'.$j}                   = $params->get('icon_bg_color'.$j);
${'icon_border_color'.$j}               = $params->get('icon_border_color'.$j);
${'icon_link'.$j}                       = $params->get('icon_link'.$j);
${'icon_link_target'.$j}                = $params->get('icon_link_target'.$j);
${'icon_font_size'.$j}                  = $params->get('icon_font_size'.$j);
${'title_text'.$j}                      = $params->get('title_text'.$j);
${'title_color'.$j}                     = $params->get('title_color'.$j);
${'description_layout'.$j}              = $params->get('description_layout'.$j);
${'description_text'.$j}                = $params->get('description_text'.$j);
${'description_text_color'.$j}          = $params->get('description_text_color'.$j);

}

$custom_id = rand(10000,20000);

// Load Bootstrap
JHtml::_('bootstrap.framework');
JHTML::stylesheet('media/jui/css/bootstrap.min.css');
JHTML::stylesheet('media/jui/css/bootstrap-responsive.css');
// Module CSS
JHTML::stylesheet('modules/mod_favglyph/theme/css/favglyph.css');
JHTML::stylesheet('modules/mod_favglyph/theme/icons/FontAwesome/css/font-awesome.css');
// Google Font
JHTML::stylesheet('//fonts.googleapis.com/css?family='.$title_google_font);
JHTML::stylesheet('//fonts.googleapis.com/css?family=Open+Sans:400');
// Scripts
if ($jquery_load) {JHtml::_('jquery.framework'); }
JHTML::script('modules/mod_favglyph/theme/js/viewportchecker/viewportchecker.js');

?>

<?php if ($layout_effect != 'layout-effect-none') { ?>

  <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('#favglyph-<?php echo $custom_id; ?> .layout-effect').addClass("favhide").viewportChecker({
      classToAdd: 'favshow <?php echo $layout_effect; ?>', // Class to add to the elements when they are visible
      offset: 100
      });
    });
  </script>

<?php } ?>

<div id="favglyph-<?php echo $custom_id; ?>" class="row-fluid">

  <?php
  $span_class = '';
  $active_columns = array($show_icon1,$show_icon2,$show_icon3,$show_icon4,$show_icon5,$show_icon6);
  $columns_check = 0; foreach ($active_columns as $active_column) { if ($active_column == 1) { $columns_check++; } }

    if ($columns_check > 0) { $span_class = 'span'.(str_replace(".","-",12/$columns_check)); }

    for ($i=1;$i<7;$i++) {

    if ((${'show_icon'.$i}) !=0) {

        $icon = '<div class="favglyph-icon-'.${'icon_layout'.$i}.' clearfix">
                  <div id="favglyph-icon"
                            style="background-color: #'.${'icon_bg_color'.$i}.';
                            width: '.$icon_width.';
                            border: '.$icon_border_width.' '.$icon_border_type.' #'.${'icon_border_color'.$i}.';
                            -webkit-border-radius: '.$icon_border_radius.';
                            -moz-border-radius: '.$icon_border_radius.';
                            border-radius: '.$icon_border_radius.';">
                    <a href="'.${'icon_link'.$i}.'" target="_'.${'icon_link_target'.$i}.'">
                      <i class="fa '.${'icon_name'.$i}.'"
                          style="color: #'.${'icon_color'.$i}.';
                          font-size: '.${'icon_font_size'.$i}.';">
                      </i>
                    </a>
                  </div>
                </div>';

        $description = '<div class="favglyph-description-'.${'icon_layout'.$i}.' clearfix">
                          <h2 id="favglyph-title"
                              style="font-family: '.$title_google_font.', sans-serif;
                              font-size: '.$title_font_size.';
                              margin: '.$title_margin.';">
                            <a href="'.${'icon_link'.$i}.'" target="_'.${'icon_link_target'.$i}.'"
                                style="color: #'.${'title_color'.$i}.';">
                              '.${'title_text'.$i}.'
                            </a>
                          </h2>
                          <p id="favglyph-description"
                            style="font-size: '.$description_font_size.';
                            color: #'.${'description_text_color'.$i}.';">
                            '.${'description_text'.$i}.'
                          </p>
                        </div>';
    ?>

    <div id="favglyph-box<?php echo $i; ?>"
      class="<?php echo $span_class; ?> favglyph<?php echo $i; ?> layout-effect">

        <?php if(${'description_layout'.$i} == 0) { echo $icon; echo $description; } else { echo $description; echo $icon; } ?>

    </div>

  <?php } } ?>

</div>



