<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <title>Travel Blog</title>
    </head>
<body id="home" <?php body_class(); ?>>
    <header class="showcase">
        <nav class="navbar ">
            <a class="logo logo--white" href="#"><img src="<?php echo get_template_directory_uri() . '/src/assets/images/logo-white.png';?>" alt=""></a>
            <a class="logo logo--black" href="#"><img src="<?php echo get_template_directory_uri() . '/src/assets/images/logo.png';?>" alt=""></a>
            <?php 
            if(has_nav_menu('primary')){
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'fallback_cb' =>  false,
                    'depth' => 4,
                    // 'walker' => new TR_Custom_Nav_Walker
                ]);
            }
            ?>
        </nav>
        <div class="showcase__quote">
            <h1>People don't take trips, trips take people.</h1>
            <p>Discover incredible palaces with me.</p>
        </div>
        <div class="arrow-down">
            <i class="fas fa-chevron-down"></i>
        </div>
    </header>