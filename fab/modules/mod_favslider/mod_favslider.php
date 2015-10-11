<?php
/**
* @file
* @brief    Responsive Slideshow Module based on FlexSlider 2, the best responsive jQuery slide around.
* @author   FavThemes
* @version  1.5
* @remarks  Copyright (C) 2013 FavThemes (WooThemes for the original script)
* @remarks  Licensed under GNU/GPLv3, see http://www.gnu.org/licenses/gpl-3.0.html
* @see      http://www.favthemes.com/
*/

// no direct access

defined('_JEXEC') or die;

$slidertype = $params->get('slidertype');
$animation = $params->get('animation');
$slideshow = ($params->get('slideshow') == 1) ? 'true' : 'false';
$slideshowspeed = $params->get('slideshowSpeed');
$arrownav = ($params->get('arrowNav') == 1) ? 'true' : 'false';
$controlnav = ($params->get('controlNav') == 1) ? 'true' : 'false';
$keyboardnav = ($params->get('keyboardNav') == 1) ? 'true' : 'false';
$mousewheel = ($params->get('mousewheel') == 1) ? 'true' : 'false';
$randomize = ($params->get('randomize') == 1) ? 'true' : 'false';
$animationloop = ($params->get('animationLoop') == 1) ? 'true' : 'false';
$pauseonhover = ($params->get('pauseOnHover') == 1) ? 'true' : 'false';
$target = $params->get('target');
$jquery = $params->get('jquery');

$rand = rand(10000,20000);

if ($jquery != 0) {JHTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');}
JHTML::script('modules/mod_favslider/js/jquery.flexslider.js');
JHTML::script('modules/mod_favslider/js/jquery.mousewheel.js');
JHTML::stylesheet('modules/mod_favslider/theme/favslider.css');

if ($jquery == 1 || $jquery == 0) { $noconflict = ''; $varj = '$';}

if ($jquery == "noconflict") {$noconflict = 'jQuery.noConflict();'; $varj = 'jQuery';}

for ($i=1;$i<=10;$i++) {

${'file'.$i} = $params->get('file'.$i);
${'file'.$i.'active'} = $params->get('file'.$i.'active');
${'file'.$i.'link'} = $params->get('file'.$i.'link');
${'file'.$i.'caption1'} = $params->get('file'.$i.'caption1');
${'file'.$i.'caption2'} = $params->get('file'.$i.'caption2');
${'file'.$i.'alt'} = $params->get('file'.$i.'alt');

}

?>

<?php

if ($slidertype == "basic" || $slidertype == "thumbnav") {

echo '<!--[if (IE 7)|(IE 8)]><style type= text/css>.fav-control-thumbs li {width: 24.99%!important;}</style><![endif]-->

<script type="text/javascript">
'.$noconflict.'
'.$varj.'(window).load(function(){
      '.$varj.'(\'#slider-'.$rand.'\').favslider({
	animation: "'.$animation.'",
	directionNav: '.$arrownav.',
	keyboardNav: '.$keyboardnav.',
	mousewheel: '.$mousewheel.',
	slideshow: '.$slideshow.',
	slideshowSpeed: '.$slideshowspeed.',
	randomize: '.$randomize.',
	animationLoop: '.$animationloop.',
	pauseOnHover: '.$pauseonhover.',

';

if ($slidertype == "basic") { echo 'controlNav: '.$controlnav.','; } elseif ($slidertype == "thumbnav") { echo 'controlNav: "thumbnails",'; }

echo'  start: function(slider){
       '.$varj.'(\'body\').removeClass(\'loading\');
        }
      });
    });

</script> '; }

if ($slidertype == "slidernav") {

echo '<style type= text/css>#carousel-'.$rand.' {margin-top: 3px;}</style><script type="text/javascript">
'.$noconflict.'
    '.$varj.'(window).load(function(){
      '.$varj.'(\'#carousel-'.$rand.'\').favslider({
        animation: "slide",
        controlNav: false,
	directionNav: '.$arrownav.',
	mousewheel: '.$mousewheel.',
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
	minItems: 2,
	maxItems: 4,
        asNavFor: \'#slider-'.$rand.'\'
      });

      '.$varj.'(\'#slider-'.$rand.'\').favslider({
	animation: "'.$animation.'",
	directionNav: '.$arrownav.',
	mousewheel: '.$mousewheel.',
	slideshow: '.$slideshow.',
	slideshowSpeed: '.$slideshowspeed.',
	randomize: '.$randomize.',
	animationLoop: '.$animationloop.',
	pauseOnHover: '.$pauseonhover.',
        controlNav: false,
        sync: "#carousel-'.$rand.'",
        start: function(slider){
        '.$varj.'(\'body\').removeClass(\'loading\');
        }
      });
    });

</script>'; }

if ($slidertype == "carousel") {

echo '<script type="text/javascript">
'.$noconflict.'
  '.$varj.'(window).load(function(){
      '.$varj.'(\'#carousel-'.$rand.'\').favslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        minItems: 2,
        maxItems: 4,
	controlNav: '.$controlnav.',
	directionNav: '.$arrownav.',
	keyboardNav: '.$keyboardnav.',
	mousewheel: '.$mousewheel.',
        start: function(carousel){
        '.$varj.'(\'body\').removeClass(\'loading\');
        }
      });
    });


</script>'; } ?>


<?php if ($slidertype == "carousel") { ?>

		<div id="carousel-<?php echo $rand; ?>" class="favslider" <?php if ($controlnav == "false") {echo 'style="margin: 0!important;"';}?> >
		    <ul class="favs">
			<?php for ($i=1;$i<=10;$i++) { if (${'file'.$i} && ${'file'.$i.'active'} == 1 && ${'file'.$i} != " ") {?>
		    	<li style="margin-left: 3px;">
		    		<?php if (${'file'.$i.'link'}) { ?> <a href="<?php echo ${'file'.$i.'link'}; ?>" target="_<?php echo $target ?>"><img src="<?php echo ${'file'.$i}; ?>" alt="<?php echo ${'file'.$i.'alt'}; ?>" /></a><?php } else { ?> <img src="<?php echo ${'file'.$i}; ?>" alt="<?php echo ${'file'.$i.'alt'}; ?>" /> <?php } ?>
		    		<?php if (${'file'.$i.'caption1'} || ${'file'.$i.'caption2'}) { if (${'file'.$i.'link'}) { ?> <a href="<?php echo ${'file'.$i.'link'}; ?>" target="_<?php echo $target ?>"><?php } ?><div id="fav-caption"><?php } ?>

		    		<?php if (${'file'.$i.'caption1'}) { ?><h3 id="fav-caption1"><?php echo ${'file'.$i.'caption1'}; ?></h3><?php } ?>
		    		<?php if (${'file'.$i.'caption2'}) { ?><p id="fav-caption2"><?php echo ${'file'.$i.'caption2'}; ?></p><?php } ?>

		    		<?php if (${'file'.$i.'caption1'} || ${'file'.$i.'caption2'}) { ?></div> <?php if (${'file'.$i.'link'}) { ?></a><?php } } ?>
		    	</li>
<?php } }?>
		    </ul>
		</div>

<?php } elseif ($slidertype == "slidernav") { ?>

		<div id="slider-<?php echo $rand; ?>" class="favslider" style="margin: 0!important;">
		    <ul class="favs">
			<?php for ($i=1;$i<=10;$i++) { if (${'file'.$i} && ${'file'.$i.'active'} == 1 && ${'file'.$i} != " ") {?>
		    	<li>
		    		<?php if (${'file'.$i.'link'}) { ?> <a href="<?php echo ${'file'.$i.'link'}; ?>" target="_<?php echo $target ?>"><img src="<?php echo ${'file'.$i}; ?>" alt="<?php echo ${'file'.$i.'alt'}; ?>" /></a><?php } else { ?> <img src="<?php echo ${'file'.$i}; ?>" alt="<?php echo ${'file'.$i.'alt'}; ?>" /> <?php } ?>
		    		<?php if (${'file'.$i.'caption1'} || ${'file'.$i.'caption2'}) { if (${'file'.$i.'link'}) { ?> <a href="<?php echo ${'file'.$i.'link'}; ?>" target="_<?php echo $target ?>"><?php } ?><div id="fav-caption"><?php } ?>

		    		<?php if (${'file'.$i.'caption1'}) { ?><h3 id="fav-caption1"><?php echo ${'file'.$i.'caption1'}; ?></h3><?php } ?>
		    		<?php if (${'file'.$i.'caption2'}) { ?><p id="fav-caption2"><?php echo ${'file'.$i.'caption2'}; ?></p><?php } ?>

		    		<?php if (${'file'.$i.'caption1'} || ${'file'.$i.'caption2'}) { ?></div> <?php if (${'file'.$i.'link'}) { ?></a><?php } } ?>
		    	</li>
<?php } }?>
		    </ul>
		</div>

		<div id="carousel-<?php echo $rand; ?>" class="favslider">
		    <ul class="favs">
			<?php for ($i=1;$i<=10;$i++) { if (${'file'.$i} && ${'file'.$i.'active'} == 1 && ${'file'.$i} != " ") {?>
		    	<li <?php if ($i>1) {?>style="margin-left: 3px;"<?php } ?>>
		    		<img src="<?php echo ${'file'.$i}; ?>" />

		    	</li>
<?php } }?>
		    </ul>
		</div>

<?php } else { ?>

		<div id="slider-<?php echo $rand; ?>" class="favslider" <?php if ($slidertype == "slidernav") { ?>style="margin: 0!important;"<?php } ?>>
		    <ul class="favs">
			<?php for ($i=1;$i<=10;$i++) { if (${'file'.$i} && ${'file'.$i.'active'} == 1 && ${'file'.$i} != " ") {?>
		    	<li <?php if ($slidertype == "thumbnav") { ?>data-thumb="<?php echo JURI::base().${'file'.$i}; ?>"<?php } if ($slidertype == "carousel" && $i>1) { ?>style="margin-left: 3px;"<?php } ?> >
		    		<?php if (${'file'.$i.'link'}) { ?> <a href="<?php echo ${'file'.$i.'link'}; ?>" target="_<?php echo $target ?>"><img src="<?php echo ${'file'.$i}; ?>" alt="<?php echo ${'file'.$i.'alt'}; ?>" /></a><?php } else { ?> <img src="<?php echo ${'file'.$i}; ?>" alt="<?php echo ${'file'.$i.'alt'}; ?>" /> <?php } ?>
		    		<?php if (${'file'.$i.'caption1'} || ${'file'.$i.'caption2'}) { if (${'file'.$i.'link'}) { ?> <a href="<?php echo ${'file'.$i.'link'}; ?>" target="_<?php echo $target ?>"><?php } ?><div id="fav-caption"><?php } ?>

		    		<?php if (${'file'.$i.'caption1'}) { ?><h3 id="fav-caption1"><?php echo ${'file'.$i.'caption1'}; ?></h3><?php } ?>
		    		<?php if (${'file'.$i.'caption2'}) { ?><p id="fav-caption2"><?php echo ${'file'.$i.'caption2'}; ?></p><?php } ?>

		    		<?php if (${'file'.$i.'caption1'} || ${'file'.$i.'caption2'}) { ?></div> <?php if (${'file'.$i.'link'}) { ?></a><?php } } ?>
		    	</li>
<?php } }?>
		    </ul>
		</div>
<?php } ?>

</section>

