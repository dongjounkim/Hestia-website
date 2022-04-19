<footer>
        <div class="wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hestia_blanc_true.png" alt="">
            <nav class="legal">
                <ul>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'footer',
                                'container' => '',
                                'theme_location' => 'footer',
                                'items_wrap' => '<ul>%3$s</ul>'
                            )
                        );
                    ?>
                    <li><a href="https://www.instagram.com/agencehestia/" target="_blank" title="Instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" class="sns" alt=""></a></li>
                </ul>
            </nav>
        </div>
    </footer>