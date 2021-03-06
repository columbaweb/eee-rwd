<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]>  <html class="no-js" <?php language_attributes(); ?>> <![endif]-->

<html lang="en-GB" class="no-js">
<head>
<title><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<?php 
   wp_enqueue_script('jquery');
   wp_enqueue_script('css3-mediaqueries', get_stylesheet_directory_uri() .'/js/css3-mediaqueries.js');
   wp_enqueue_script('modernizr', get_stylesheet_directory_uri() .'/js/modernizr.js');
   wp_enqueue_script('responsive-nav', get_stylesheet_directory_uri() .'/js/responsive-nav.js');
?>
<?php wp_head(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
</head> 

<body <?php body_class(); ?>>
<!-- header -->	
   <header>
<!-- topbar -->	
      <div id="topbar">
         <div class="container12">
            <div class="column3">
               <p><?php bloginfo('description'); ?></p>
            </div>           
	    
            <div class="column9">
               <ul id="social-links">
                  <li><a id="twitter" href="" target="_blank" >twitter</a></li>
                  <li><a id="google" href="" target="_blank" >google</a></li>
                  <li><a id="facebook" href="" target="_blank" >facebook</a></li>
                  <li><a id="linkedin" href="" target="_blank" >linkedin</a></li>
                  <li><a id="youtube" href="" target="_blank" >linkedin</a></li>
                  <li><a id="rss" href="" target="_blank" >rss</a></li>
               </ul>
            </div>
         </div>
      </div>    
   
      <div class="wrap container12">
         <div id="logo" class="column6">
            <a href="<?php echo home_url(); ?>" ><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.jpg" width="" height="" alt="company logo" /></a>
         </div>
         <div class="column6">
            <p id="phone">Contact Details</p>
         </div>
      </div>    
   </header>

<!-- content wrap begins -->
<div class="wrap container12"> 

<!-- main navigation -->
   <nav class="column12" id="nav" role="navigation"> 
	<?php wp_nav_menu( array('theme_location' => 'topnav')); ?>
   </nav>
   
