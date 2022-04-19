<?php
    get_header('beige');
?>

<div class="main wrapper">
    <div class="post">

        <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                get_template_part('template-parts/content','article');
            }
        }
        ?>

       
    </div>
</div>


<?php 
    get_footer();
    wp_footer();
?>

</body>

</html>