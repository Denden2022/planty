<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<header id="header" role="banner">
<div id="branding">
    <div id="branding-img">
        <?php echo '<a href="http://localhost/Planty/" ><img src="http://localhost/Planty/wp-content/uploads/2023/11/Logo-source.png" alt="logo"></a>'?>
    </div>
    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
    </nav>
</div>
</header>
<div id="container">
<main id="content" role="main">