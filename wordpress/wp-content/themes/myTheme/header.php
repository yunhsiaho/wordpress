<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
<head>
    <meta charset= "<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <!-- <h1><?php bloginfo('name'); ?></h1> 
    <h1><?php echo "test"; ?></h1>  -->
<header>
<div class="container">
<?php
wp_nav_menu( array(
    'theme_location' => 'menu-header-1',
    'menu_class' => 'nav'
) );
?>
</div>
</header>
