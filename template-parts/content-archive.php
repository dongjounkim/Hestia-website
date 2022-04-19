<div class="post-content archive">
    <h2 class="archive-title">
        <?php
        the_title();
        ?>
    </h2>
    <p class="archive-info">    
        <?php
        the_date();
        ?>
    </p>
    <?php  echo '<p class="archive-text">' . get_the_excerpt() . '</p>' ?>
    <p>
        <a href="<?php the_permalink(); ?>" class="archive-arrow">Lire l'article &rarr;</a>
    </p>

 </div>