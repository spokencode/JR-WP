<!doctype html>
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="google-site-verification" content="BjNhohxvmpIDgatbArfmtIib7-ofz4uqRkYPPVw91Nk" />
<meta name="msvalidate.01" content="5415C900A3174592751B185F6886CFE2" />
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- media-queries.js (fallback) -->
<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->
<!-- html5.js -->
<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<!-- wordpress head functions -->
<?php wp_head(); ?>

	<script type="text/javascript" >
		
		
		
jQuery(document).ready(function($) {	


	$("#xbutton-container").click(function(){
    	$("#test-content").fadeToggle();
		$(".test-bg-img-blur").fadeToggle();
	 });
	

});
	

	</script>
<!-- end of wordpress head -->
</head>
<body <?php body_class(); ?>>
	<div class="bg-img-fade"><div class="bg-img-blur"></div></div>
<header role="banner">
  <div id="social-container" class="container-fluid">
    <div class="container"><class="row">
      <div id="iam" class="col-xs-3">I am</div>
      <div id="icon-container" class="col-xs-9"><?php echo ctsocial_icons_template(); ?></div>
    </div>
  </div>
  </div>
  <div class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 navbar-header">
          <div class="row">
            <div class="col-xs-9 col-sm-4 col-md-4 col-lg-4"> <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img id="JRsig" class="img-responsive" src="http://www.jasonrenai.com/public/wp-content/uploads/2014/01/JasonRenaiSig.png" /></a> </div>
            <div>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 collapse navbar-collapse navbar-responsive-collapse">
              <?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
            </div>
          </div>
        </div>
        <!-- end .row -->
      </div>
      <!-- end .container -->
    </div>
  </div>
  <!-- end .navbar -->
</header>
<!-- end header -->
<!-- end header -->
<!--<div id="bg"><img src="http://www.jasonrenai.com/public/wp-content/uploads/2014/01/iStudio4.jpg" /></div>-->

