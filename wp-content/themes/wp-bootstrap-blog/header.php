<!doctype html>
<html <?php language_attributes() ;?>>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php 
            if(is_page( $page = 'blog' ) ){
                echo 'WP & Bootstrap Blog';
            } else{
                echo wp_title(); 
            }
        ?>
    </title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Menu Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">WP & Bootstrap Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <?php 
                wp_nav_menu( array(
                    'theme_location'  => 'menu-principal',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarSupportedContent',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        </div>
    </div>
</nav>
<!-- Fin Menu Navbar -->

<!-- Blog -->
<div class="container">

<h1 class="my-5 text-center text-primary">Mi Blog WordPress</h1>
<hr>
