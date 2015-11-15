<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
 <meta name="description" content="<?php bloginfo('description'); ?>" />
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><meta charset="utf-8" />
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
 <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
 <link href="<?php bloginfo('template_directory'); ?>/color/default.css" rel="stylesheet" media="screen">
 <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
 <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<?php wp_head(); ?>
  </head>
<body>
<div class="container">
	<div class="row">
       <div class="col-md-4">
       		<div class="logo">
               <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
       </div>
		<div class="col-md-8">
			<div class="menu-area">
              <nav>
                <ul id="site-nav">
                 <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                 </ul>
              </nav>
           </div> 
          </div>
        </div>
       </div>
       <div id="intro">
          <div class="intro-text">
              <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="brand">
                       </div>
                  </div>
                  </div>
              </div>
          </div>
     </div>
     
