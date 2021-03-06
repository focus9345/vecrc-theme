<?php
/**
 * @package VECRC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri('assets/favicon/apple-touch-icon.png'); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('assets/favicon/favicon-32x32.png'); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('assets/favicon/favicon-16x16.png'); ?>">
<link rel="manifest" href="<?php echo get_theme_file_uri('assets/favicon/site.webmanifest'); ?>">
<link rel="mask-icon" href="<?php echo get_theme_file_uri('assets/favicon/safari-pinned-tab.svg'); ?>" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
<nav class="navbar navbar-expand-xl sticky-top" role="navigation">
  <div class="container">
	
  <a class="navbar-brand" href="/"><img src="<?php echo get_theme_file_uri('assets/logo.png');?>" alt="The Valley Early Childhood Regional Council" class="header-logo"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
		MENU <i class="fas fa-bars"></i>
    </button>

    
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'navbar-nav ml-auto mb-2 mb-lg-0',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
</header>

