<?php
/**
CHANGES! Changes 2
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
function w3c(){
    if((stristr($_SERVER["HTTP_USER_AGENT"],'w3c') === FALSE))
    return true;
}
 if(w3c()){ ?> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/fluid.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/custom.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("stylesheet_directory");?>/images/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<?php wp_head(); ?>
 <?php } ?>
</head>
<?php if(w3c()){ ?> 
<body <?php if($post->ID !=65){?>id="innerpage"<?php }?>>
<div id="header">
<div id="header-inner"  align="center">
<div class="logo"><a href="<?php echo home_url();?>" title="iAdrenalin">	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		
			<?php dynamic_sidebar( 'sidebar-logo' ); ?>
	
	<?php endif; ?></a></div>
<div class="top-right">

<div class="top-links">

<div  class="leave-btn"><a href="<?php echo get_permalink(46);?>" title="Leave A Message"><img src="<?php bloginfo("stylesheet_directory");?>/images/msg-btn.jpg" width="170" height="40" alt="Leave A Message" /></a></div>

<div class="online-btn" ><a href="<?php echo get_permalink(2702);?>" title="Book Online"><img src="<?php bloginfo("stylesheet_directory");?>/images/online-btn.jpg" width="153" height="40" alt="Book Online" /></a></div>

<?php if( !ismobile() ) { ?>
<div class="floatfacebook" ><div id="facebook"><iframe  id="facebookiframe"src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fiadrenalin.com.au&amp;send=false&amp;layout=button_count&amp;width=350&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; margin-top:5px; width:67%; height:21px;" allowTransparency="true"></iframe></div>
<?php } ?>

</div>
<div class="cleardiv"></div>
<?php if( ismobile() ) { ?>
<div class="phone-number-tap-to-call">Tap to call</div>
<?php } ?>
<div class="phone-number">0421 886 681</div>

</div>


<?php if( is_single() || is_archive()|| is_author() || is_category() || is_tag()){
?><script type="text/javascript">
jQuery(document).ready(function(){
jQuery("#menu-item-29").addClass('current-menu-item');
});

</script>
<?php }?>
<div id="menubar">
<div id="menu-content">
 <?php $defaults1 = array(
  'theme_location'  =>'' ,
  'menu'            => 'header', 
  'container'       => false, 
  'echo'            => true,
  'items_wrap'      => '<ul  id=\"%1$s\" >%3$s</ul>',
  'depth'           => 0,
  'walker'          => '');?>
           <?php wp_nav_menu( $defaults1); ?>
</div>
</div>                                 
</div>

<div class="cleardiv"></div>
</div>
<div class="cleardiv"></div>
</div>
<div class="clearheader"></div>
<!-- Pad the header so that is stays on top without overlapping the rest of the page -->

<?php if( !ismobile() ) { ?> 
	<div id="keep-heading-fixed"></div>
<?php } ?>
<?php }?>