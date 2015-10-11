<?php
/**
* @file
* @brief    Responsive FavSocial Module
* @author   FavThemes
* @version  1.4
* @remarks  Copyright (C) 2013 FavThemes
* @remarks  Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
* @see      http://www.favthemes.com/
*/

// no direct access

defined('_JEXEC') or die;

for ($i=1;$i<13;$i++) {

$moduleAlign                                     = $params->get('moduleAlign');
${'showIcon'.$i}                              = $params->get('showIcon'.$i);
${'linkIcon'.$i}                              = $params->get('linkIcon'.$i);
${'nameIcon'.$i}                              = $params->get('nameIcon'.$i);
${'colorIcon'.$i}                             = $params->get('colorIcon'.$i);
${'fontSizeIcon'.$i}                          = $params->get('fontSizeIcon'.$i);
${'nameIconStack'.$i}                         = $params->get('nameIconStack'.$i);
${'colorIconStack'.$i}                        = $params->get('colorIconStack'.$i);
${'fontSizeIconStack'.$i}                     = $params->get('fontSizeIconStack'.$i);
${'bgColorIcon'.$i}                           = $params->get('bgColorIcon'.$i);
${'paddingIcon'.$i}                           = $params->get('paddingIcon'.$i);
${'borderRadiusIcon'.$i}                      = $params->get('borderRadiusIcon'.$i);

}
// Load Bootstrap
JHtml::_('bootstrap.framework');
JHTML::stylesheet('media/jui/css/bootstrap.min.css');
JHTML::stylesheet('media/jui/css/bootstrap-responsive.css');
// Module CSS
JHTML::stylesheet('modules/mod_favsocial/theme/FontAwesome/css/font-awesome.css');
JHTML::stylesheet('modules/mod_favsocial/theme/favsocial.css');

?>

<div id="favsocial"
    style="float: <?php echo $moduleAlign; ?>; width:100%;">
  <ul id="favsocial-list"
      style="float: <?php echo $moduleAlign; ?>;">

    <?php

      for ($i=1;$i<13;$i++) {

        if ((${'showIcon'.$i}) !=0) { ?>

          <li id="favsocial-icon<?php echo $i; ?>">
            <a href="<?php echo ${'linkIcon'.$i}; ?>" target="_blank"
              style="background-color: #<?php echo ${'bgColorIcon'.$i}; ?>;
                    padding: <?php echo ${'paddingIcon'.$i}; ?>;
                    -webkit-border-radius: <?php echo ${'borderRadiusIcon'.$i}; ?>;
                    -moz-border-radius: <?php echo ${'borderRadiusIcon'.$i}; ?>;
                    border-radius: <?php echo ${'borderRadiusIcon'.$i}; ?>">

              <span class="fa-stack">
                <i class="fa <?php echo ${'nameIcon'.$i}; ?> fa-stack-2x"
                  style="color: #<?php echo ${'colorIcon'.$i}; ?>;
                        font-size: <?php echo ${'fontSizeIcon'.$i}; ?>;">
                </i>
                <i class="fa <?php echo ${'nameIconStack'.$i}; ?> fa-stack-1x"
                  style="color: #<?php echo ${'colorIconStack'.$i}; ?>;
                        font-size: <?php echo ${'fontSizeIconStack'.$i}; ?>;">
                </i>
              </span>
            </a>
          </li>

    <?php } } ?>

  </ul>

</div>
