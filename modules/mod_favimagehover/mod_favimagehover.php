<?php 
/**
* @file
* @brief    Responsive FavImageHover Module
* @author   FavThemes
* @version  1.5
* @remarks  Copyright (C) 2013 FavThemes
* @remarks  Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
* @see      http://www.favthemes.com/
*/

// no direct access

defined('_JEXEC') or die;

$uploadImage                = $params->get('uploadImage');
$imageAlt                   = $params->get('imageAlt');
$moduleBorderRadius         = $params->get('moduleBorderRadius');
$hoverImageBgColor          = $params->get('hoverImageBgColor');
$imageText                  = $params->get('imageText');
$imageTextColor             = $params->get('imageTextColor');
$imageTextFontSize          = $params->get('imageTextFontSize');
$imageTextLineHeight        = $params->get('imageTextLineHeight');
$imageTextAlign             = $params->get('imageTextAlign');
$readmoreText               = $params->get('readmoreText');
$readmoreLink               = $params->get('readmoreLink');
$readmoreTarget             = $params->get('readmoreTarget');
$readmoreColor              = $params->get('readmoreColor');
$readmoreBgColor            = $params->get('readmoreBgColor');
$readmorePadding            = $params->get('readmorePadding');
$readmoreMargin             = $params->get('readmoreMargin');
$readmoreBorderRadius       = $params->get('readmoreBorderRadius');
$readmoreIcon               = $params->get('readmoreIcon');
$readmoreColor              = $params->get('readmoreColor');
$readmoreIconFontSize       = $params->get('readmoreIconFontSize');
$titleText                  = $params->get('titleText');
$titleIcon                  = $params->get('titleIcon');
$titleIconFontSize          = $params->get('titleIconFontSize');
$titleIconVerticalAlign 	= $params->get('titleIconVerticalAlign');
$titleColor                 = $params->get('titleColor');
$titleBgColor               = $params->get('titleBgColor');
$titleLink                  = $params->get('titleLink');
$titleTarget                = $params->get('titleTarget');
$titlePadding               = $params->get('titlePadding');
$titleFontSize              = $params->get('titleFontSize');
$titleLineHeight            = $params->get('titleLineHeight');
$titleTextAlign             = $params->get('titleTextAlign');

JHTML::stylesheet('modules/mod_favimagehover/theme/favimagehover.css');
JHTML::stylesheet('modules/mod_favimagehover/theme/FontAwesome/css/font-awesome.css');

?>


<div id="favimagehover">

  <div id="favimagehover-uploadimage">
    <?php if ($uploadImage) { ?>
      <img src="<?php echo $uploadImage; ?>"
          alt="<?php echo $imageAlt; ?>" 
          style="-webkit-border-top-left-radius: <?php echo $moduleBorderRadius; ?>;
          -webkit-border-top-right-radius: <?php echo $moduleBorderRadius; ?>;
          -moz-border-radius-topleft: <?php echo $moduleBorderRadius; ?>;
          -moz-border-radius-topright: <?php echo $moduleBorderRadius; ?>;
          border-top-left-radius: <?php echo $moduleBorderRadius; ?>;
          border-top-right-radius: <?php echo $moduleBorderRadius; ?>;"/>
    <?php } else { ?>
      <img src="modules/mod_favimagehover/demo/demo-image.jpg" 
          style="-webkit-border-top-left-radius: <?php echo $moduleBorderRadius; ?>;
          -webkit-border-top-right-radius: <?php echo $moduleBorderRadius; ?>;
          -moz-border-radius-topleft: <?php echo $moduleBorderRadius; ?>;
          -moz-border-radius-topright: <?php echo $moduleBorderRadius; ?>;
          border-top-left-radius: <?php echo $moduleBorderRadius; ?>;
          border-top-right-radius: <?php echo $moduleBorderRadius; ?>;"/>
    <?php } ?>
  </div>

  <div 
    id="favimagehover-image" 
    style="background-color: #<?php echo $hoverImageBgColor; ?>;
          -webkit-border-top-left-radius: <?php echo $moduleBorderRadius; ?>;
          -webkit-border-top-right-radius: <?php echo $moduleBorderRadius; ?>;
          -moz-border-radius-topleft: <?php echo $moduleBorderRadius; ?>;
          -moz-border-radius-topright: <?php echo $moduleBorderRadius; ?>;
          border-top-left-radius: <?php echo $moduleBorderRadius; ?>;
          border-top-right-radius: <?php echo $moduleBorderRadius; ?>;">
    <p 
    id="favimagehover-text" 
    style="color: #<?php echo $imageTextColor; ?>;
          font-size: <?php echo $imageTextFontSize; ?>;
          line-height: <?php echo $imageTextLineHeight; ?>;
          text-align: <?php echo $imageTextAlign; ?>;">
            <?php echo $imageText; ?>
    </p>

    <div 
      id="favimagehover-readmore">
        <a href="<?php echo $readmoreLink; ?>" 
            target="_<?php echo $readmoreTarget; ?>"
            style="color: #<?php echo $readmoreColor; ?>;
              padding: <?php echo $readmorePadding; ?>;
              margin: <?php echo $readmoreMargin; ?>;
              background-color: #<?php echo $readmoreBgColor; ?>;
              -webkit-border-radius: <?php echo $readmoreBorderRadius; ?>;
              -moz-border-radius: <?php echo $readmoreBorderRadius; ?>;
              border-radius: <?php echo $readmoreBorderRadius; ?>; ">
        <i class="fa <?php echo $readmoreIcon; ?>"
            style="color: #<?php echo $readmoreColor; ?>;
                  font-size: <?php echo $readmoreIconFontSize; ?>;">
        </i>
        
            <?php echo $readmoreText; ?>
        </a>
    </div> 
  </div>
  
</div>

<h3 
  id="favimagehover-title"
  style="margin-bottom:0;
        color: #<?php echo $titleColor; ?>;
        background-color: #<?php echo $titleBgColor; ?>;
        padding: <?php echo $titlePadding; ?>;
        font-size: <?php echo $titleFontSize; ?>;
        line-height: <?php echo $titleLineHeight; ?>;
        text-align: <?php echo $titleTextAlign; ?>;
        -webkit-border-bottom-right-radius: <?php echo $moduleBorderRadius; ?>;
        -webkit-border-bottom-left-radius: <?php echo $moduleBorderRadius; ?>;
        -moz-border-radius-bottomright: <?php echo $moduleBorderRadius; ?>;
        -moz-border-radius-bottomleft: <?php echo $moduleBorderRadius; ?>;
        border-bottom-right-radius: <?php echo $moduleBorderRadius; ?>;
        border-bottom-left-radius: <?php echo $moduleBorderRadius; ?>;">
    <i class="fa <?php echo $titleIcon; ?>"
      style="color: #<?php echo $titleColor; ?>;
             font-size: <?php echo $titleIconFontSize; ?>;
             vertical-align: <?php echo $titleIconVerticalAlign; ?>">
    </i>
    <span
      style="color: #<?php echo $titleColor; ?>;">
      <?php echo $titleText; ?>
    </span>
</h3>






