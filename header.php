<?php
/**
 * The header for our theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">
            <div class="d-md-flex align-items-center container">
            <!-- Begin Logo --> 
            <div class="logoarea">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                
            </div>
            <!-- End Logo --> 

		 <!-- Begin Menu -->
            
         <div class="navbar-expand-lg  d-lg-flex align-items-center ml-auto">
                    
                    <button class="navbar-toggler navbar-toggler-right collapsed main-mob-menu" type="button" data-toggle="collapse" data-target="#bs4navbar,#bs4navbartop" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menuclose">X</span>
                    <span class="navbar-toggler-icon"></span>
                    </button> 
                        
                    <?php
                    wp_nav_menu([
                     'menu'            => 'top',
                     'theme_location'  => 'extramenu',
                     'container'       => 'div',
                     'container_id'    => 'bs4navbartop',
                     'container_class' => 'collapse navbar-collapse',
                     'menu_id'         => false,
                     'menu_class'      => 'navbar-nav w-100 d-lg-flex align-items-center',
                     'depth'           => 2,
                     'fallback_cb'     => 'bs4navwalker::fallback',
                     'walker'          => new bs4navwalker()
                    ]);
                    ?>
                        
                    </div>
                 
                <!-- End Menu -->

            </div>

	</header><!-- #masthead -->

	<div id="content" class="site-content container">