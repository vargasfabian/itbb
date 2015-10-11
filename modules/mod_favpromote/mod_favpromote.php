<?php

/**
*   FavPromote
*
*   Responsive and customizable Joomla!3 module
*
*   @version        1.7
*   @link           http://extensions.favthemes.com/favpromote
*   @author         FavThemes - http://www.favthemes.com
*   @copyright      Copyright (C) 2015 FavThemes.com. All Rights Reserved.
*   @license        Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access

defined('_JEXEC') or die;

$jquery_load                            = $params->get('jquery_load');
$layout_effect                          = $params->get('layout_effect');
$title_google_font                      = $params->get('title_google_font');
$title_padding                          = $params->get('title_padding');
$title_font_size                        = $params->get('title_font_size');
$title_line_height                      = $params->get('title_line_height');
$title_text_align                       = $params->get('title_text_align');
$title_icon_font_size                   = $params->get('title_icon_font_size');
$title_icon_vertical_align              = $params->get('title_icon_vertical_align');
$description_text_font_size             = $params->get('description_text_font_size');
$description_text_line_height           = $params->get('description_text_line_height');
$description_text_align                 = $params->get('description_text_align');

for ($j=1;$j<7;$j++) {

${'show_column'.$j}                     = $params->get('show_column'.$j);
${'column_border_color'.$j}             = $params->get('column_border_color'.$j);
${'column_border_radius'.$j}            = $params->get('column_border_radius'.$j);
${'upload_image'.$j}                    = $params->get('upload_image'.$j);
${'show_image_link'.$j}                 = $params->get('show_image_link'.$j);
${'image_link'.$j}                      = $params->get('image_link'.$j);
${'image_target'.$j}                    = $params->get('image_target'.$j);
${'image_alt'.$j}                       = $params->get('image_alt'.$j);
${'title_text'.$j}                      = $params->get('title_text'.$j);
${'title_color'.$j}                     = $params->get('title_color'.$j);
${'title_bg_color'.$j}                  = $params->get('title_bg_color'.$j);
${'show_title_link'.$j}                 = $params->get('show_title_link'.$j);
${'title_link'.$j}                      = $params->get('title_link'.$j);
${'title_target'.$j}                    = $params->get('title_target'.$j);
${'title_icon'.$j}                      = $params->get('title_icon'.$j);
${'description_text'.$j}                = $params->get('description_text'.$j);
${'description_text_color'.$j}          = $params->get('description_text_color'.$j);

}

$custom_id = rand(10000,20000);

// Load Bootstrap
JHtml::_('bootstrap.framework');
JHTML::stylesheet('media/jui/css/bootstrap.min.css');
JHTML::stylesheet('media/jui/css/bootstrap-responsive.css');
// Module CSS
JHTML::stylesheet('modules/mod_favpromote/theme/css/favpromote.css');
JHTML::stylesheet('modules/mod_favpromote/theme/icons/FontAwesome/css/font-awesome.css');
// Google Font
JHTML::stylesheet('//fonts.googleapis.com/css?family='.$title_google_font);
JHTML::stylesheet('//fonts.googleapis.com/css?family=Open+Sans:400');
// Scripts
if ($jquery_load) {JHtml::_('jquery.framework'); }
JHTML::script('modules/mod_favpromote/theme/js/viewportchecker/viewportchecker.js');

?>

  <style type="text/css">

    .favpromote1:hover { background-color: #<?php echo $title_bg_color1; ?>; }
    .favpromote2:hover { background-color: #<?php echo $title_bg_color2; ?>; }
    .favpromote3:hover { background-color: #<?php echo $title_bg_color3; ?>; }
    .favpromote4:hover { background-color: #<?php echo $title_bg_color4; ?>; }
    .favpromote5:hover { background-color: #<?php echo $title_bg_color5; ?>; }
    .favpromote6:hover { background-color: #<?php echo $title_bg_color6; ?>; }

  </style>

  <?php if ($layout_effect != 'layout-effect-none') { ?>

  <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery('#favpromote-<?php echo $custom_id; ?> .layout-effect').addClass("favhide").viewportChecker({
      classToAdd: 'favshow <?php echo $layout_effect; ?>', // Class to add to the elements when they are visible
      offset: 100
      });
    });
  </script>

  <?php } ?>

<div id="favpromote-<?php echo $custom_id; ?>" class="row-fluid">

  <?php
  $span_class = '';
  $active_columns = array($show_column1,$show_column2,$show_column3,$show_column4,$show_column5,$show_column6);
  $columns_check = 0; foreach ($active_columns as $active_column) { if ($active_column == 1) { $columns_check++; } }

    if ($columns_check > 0) { $span_class = 'span'.(str_replace(".","-",12/$columns_check)); }

    for ($i=1;$i<7;$i++) {

    if ((${'show_column'.$i}) !=0) { ?>

      <div id="favpromote-box<?php echo $i; ?>"
        class="<?php echo $span_class; ?> favpromote<?php echo $i; ?> layout-effect"
        style="border: 1px solid #<?php echo ${'column_border_color'.$i}; ?>;
        -webkit-border-radius: <?php echo ${'column_border_radius'.$i}; ?>;
        -moz-border-radius: <?php echo ${'column_border_radius'.$i}; ?>;
        border-radius: <?php echo ${'column_border_radius'.$i}; ?>;">

        <div id="favpromote-image<?php echo $i; ?>"
              style="height:100%; text-align: center;">

          <?php if (${'show_image_link'.$i} == 1) { ?>

            <a href="<?php echo ${'image_link'.$i}; ?>" target="_<?php echo ${'image_target'.$i}; ?>">

          <?php } ?>

              <?php if (${'upload_image'.$i}) { ?>
                <img src="<?php echo ${'upload_image'.$i}; ?>"
                alt="<?php echo ${'image_alt'.$i}; ?>"/>
              <?php } else { ?>
                <img src="modules/mod_favpromote/demo/demo-image<?php echo $i; ?>.jpg"
                alt="<?php echo ${'image_alt'.$i}; ?>" />
              <?php } ?>

          <?php if (${'show_image_link'.$i} == 1) { ?>

            </a>

          <?php } ?>

        </div>

        <p id="favpromote-text<?php echo $i; ?>"
          style="color: #<?php echo ${'description_text_color'.$i}; ?>;
                font-size: <?php echo $description_text_font_size; ?>;
                line-height: <?php echo $description_text_line_height; ?>;
                text-align: <?php echo $description_text_align; ?>;">
                  <?php echo ${'description_text'.$i}; ?>
        </p>

        <h4 id="favpromote-title<?php echo $i; ?>"
            style="color: #<?php echo ${'title_color'.$i}; ?>;
                background-color: #<?php echo ${'title_bg_color'.$i}; ?>;
                font-family: <?php echo $title_google_font; ?>;
                padding: <?php echo $title_padding; ?>;
                font-size: <?php echo $title_font_size; ?>;
                line-height: <?php echo $title_line_height; ?>;
                text-align: <?php echo $title_text_align; ?>;
                margin-bottom:0;">
            <i class="fa <?php echo ${'title_icon'.$i}; ?>"
              style="color: #<?php echo ${'title_color'.$i}; ?>;
                    font-size: <?php echo $title_icon_font_size; ?>;
                    vertical-align: <?php echo $title_icon_vertical_align; ?>;
                    padding-right: 0.4em;"></i>

          <?php if (${'show_title_link'.$i} == 1) { ?>

            <a href="<?php echo ${'title_link'.$i}; ?>" target="_<?php echo ${'title_target'.$i}; ?>"
              style="color: #<?php echo ${'title_color'.$i}; ?>;">
              <?php echo ${'title_text'.$i}; ?>
            </a>

          <?php } else {
            echo ${'title_text'.$i};
          } ?>

        </h4>

      </div>

  <?php } } ?>

</div>