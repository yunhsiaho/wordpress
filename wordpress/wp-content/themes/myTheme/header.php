<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

<head>
    <meta charset= "<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>    
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <!-- <h1><?php bloginfo('name'); ?></h1> 
    <h1><?php echo "test"; ?></h1>  -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="dev-title">
                <a href="http://localhost">DEV RESTAURANT</a>
            </div>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-header-1',
                'menu_class' => 'my-nav'
            ) );
            ?>
        </div>
    </div>
</header>
