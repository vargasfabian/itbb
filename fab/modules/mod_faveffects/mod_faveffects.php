<?php
/**
* @file
* @brief    Responsive FavEffects Module
* @author   FavThemes
* @version  1.4
* @remarks  Copyright (C) 2013-2014 FavThemes
* @remarks  Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
* @see      http://www.favthemes.com/
*/

// no direct access

defined('_JEXEC') or die;

for ($j=1;$j<7;$j++) {

${'effectIcon'.$j}                            = $params->get('effectIcon'.$j);
${'showIcon'.$j}                              = $params->get('showIcon'.$j);
${'iconLink'.$j}                              = $params->get('iconLink'.$j);
${'iconLinkTarget'.$j}                        = $params->get('iconLinkTarget'.$j);
${'bgColorIcon'.$j}                           = $params->get('bgColorIcon'.$j);
${'borderWidthIcon'.$j}                       = $params->get('borderWidthIcon'.$j);
${'borderTypeIcon'.$j}                        = $params->get('borderTypeIcon'.$j);
${'borderColorIcon'.$j}                       = $params->get('borderColorIcon'.$j);
${'borderRadiusIcon'.$j}                      = $params->get('borderRadiusIcon'.$j);
${'nameIcon'.$j}                              = $params->get('nameIcon'.$j);
${'colorIcon'.$j}                             = $params->get('colorIcon'.$j);
${'fontSizeIcon'.$j}                          = $params->get('fontSizeIcon'.$j);
${'titleText'.$j}                             = $params->get('titleText'.$j);
${'titleColor'.$j}                            = $params->get('titleColor'.$j);
${'titleGoogleFont'.$j}                       = $params->get('titleGoogleFont'.$j);
${'titleFontSize'.$j}                         = $params->get('titleFontSize'.$j);


}
// Load Bootstrap
JHtml::_('bootstrap.framework');
JHTML::stylesheet('media/jui/css/bootstrap.min.css');
JHTML::stylesheet('media/jui/css/bootstrap-responsive.css');
// Module CSS
JHTML::stylesheet('modules/mod_faveffects/theme/FontAwesome/css/font-awesome.css');
JHTML::stylesheet('modules/mod_faveffects/theme/faveffects.css');
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont1);
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont2);
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont3);
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont4);
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont5);
JHTML::stylesheet('http://fonts.googleapis.com/css?family='.$titleGoogleFont6);

?>

<div id="faveffects" class="row-fluid">

<?php
$scls = '';
$arrchk = array($showIcon1,$showIcon2,$showIcon3,$showIcon4,$showIcon5,$showIcon6);
$ichk = 0; foreach ($arrchk as $arck) { if ($arck == 1) { $ichk++; } }

if ($ichk > 0) { $scls = 'span'.(str_replace(".","-",12/$ichk)); }

for ($i=1;$i<7;$i++) {

 if ((${'showIcon'.$i}) !=0) { ?>
  <div id="faveffects-box<?php echo $i; ?>"
    class="<?php echo $scls; ?>">
      <div id="faveffects-icon<?php echo $i; ?>"
        class="faveffects-<?php echo ${'effectIcon'.$i}; ?>"
        style="background-color: #<?php echo ${'bgColorIcon'.$i}; ?>;
              border: <?php echo ${'borderWidthIcon'.$i}; ?> <?php echo ${'borderTypeIcon'.$i}; ?> #<?php echo ${'borderColorIcon'.$i}; ?>;
              -webkit-border-radius: <?php echo ${'borderRadiusIcon'.$i}; ?>;
              -moz-border-radius: <?php echo ${'borderRadiusIcon'.$i}; ?>;
              border-radius: <?php echo ${'borderRadiusIcon'.$i}; ?>;">
        <a href="<?php echo ${'iconLink'.$i}; ?>" target="_<?php echo ${'iconLinkTarget'.$i}; ?>">
          <i class="fa <?php echo ${'nameIcon'.$i}; ?>"
              style="color: #<?php echo ${'colorIcon'.$i}; ?>;
                    font-size: <?php echo ${'fontSizeIcon'.$i}; ?>;">
          </i>
        </a>
      </div>
    <p id="faveffects-title<?php echo $i; ?>"
        style="font-family: <?php echo ${'titleGoogleFont'.$i}; ?>;
              font-size: <?php echo ${'titleFontSize'.$i}; ?>;">
        <a href="<?php echo ${'iconLink'.$i}; ?>" target="_<?php echo ${'iconLinkTarget'.$i}; ?>"
          style="color: #<?php echo ${'titleColor'.$i}; ?>;"><?php echo ${'titleText'.$i}; ?></a>
    </p>

  </div>
<?php } } ?>

</div>