<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    wp_head();
    ?>
</head>

<body>
    <nav class="mainMenu">
        <div class="wrapper">
            <a href="/"><img class="menuImg"src="<?php echo get_template_directory_uri(); ?>/assets/images/hestia_blanc_true.png" alt="Hestia Logo" title="Accueil"></a>

            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div>
            </label>
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="menu">%3$s</ul>'
                    )
                );
            ?>
        </div>
    </nav>

    <!-- <nav class="mainMenu">
        <div class="wrapper">
            <a href="/"><img class="menuImg"src="<?php 
            // echo get_template_directory_uri(); 
            ?>/assets/images/hestia_logo_blanc.png" alt="Hestia Logo" title="Accueil"></a>

            <?php
                // wp_nav_menu(
                //     array(
                //         'menu' => 'primary',
                //         'container' => '',
                //         'theme_location' => 'primary',
                //         'items_wrap' => '<ul>%3$s</ul>'
                //     )
                // );
            ?>
        </div>
    </nav> -->