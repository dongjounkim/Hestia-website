<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="mainMenu">
        <div class="wrapper">
            <a href="/"><img src="img/hestia_logo_blanc.png" alt="Hestia Logo" title="Accueil"></a>
            <ul>
                <li><a href="">Contact</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Réalisations</a></li>
                <li><a href="">L'Équipe</a></li>
            </ul>
        </div>
    </nav>
    <section class="hero">
        <h1>Hestia<br>Lorem ipsum dolor sit amet</h1>
    </section>
    <section class="intro">
        <div class="wrapper">
            <img src="img/test.png" alt="">
            <div class="introText">
                <h2>Qui sommes nous ?</h2>
                <p>Ex consectetur fugiat dolore do et deserunt excepteur culpa occaecat eu velit ullamco. Sunt do
                    exercitation culpa aliqua. Consectetur adipisicing pariatur commodo exercitation veniam. Laboris et
                    amet est velit do reprehenderit eu adipisicing sunt nisi.</p>
            </div>
        </div>

    </section>
    <section class="services">
        <div class="wrapper"> 
            <h3>Nos prestations</h3>
            <div class="cardContainer">
                <div class="card">
                    <img src="/img/www.png" alt="">
                    <h4>Alpha</h4>
                    <p>Cillum et cillum esse pariatur ut mollit consectetur nulla exercitation qui. Enim deserunt laboris reprehenderit labore nulla incididunt nulla cupidatat non cillum sint id laborum. Deserunt non ea qui reprehenderit in cupidatat tempor. Et duis ut ipsum tempor do eu aliqua.</p>
                </div>
                <div class="card">
                    <img src="/img/www.png" alt="">
                    <h4>Beta</h4>
                    <p>Duis velit ut aliqua eiusmod aliqua minim voluptate eiusmod sint pariatur do est. Enim commodo ipsum pariatur est ullamco id id velit duis laborum amet sit. Aute officia qui non aliquip dolor non incididunt officia qui cillum.</p>
                </div>
                <div class="card">
                    <img src="/img/www.png" alt="">
                    <h4>Gamma</h4>
                    <p>Sunt nostrud incididunt dolor nostrud ex veniam consectetur ullamco exercitation ea incididunt. Deserunt proident cillum culpa dolor enim. Reprehenderit pariatur nostrud ut pariatur dolor aliqua. Amet ullamco nostrud sit aliqua reprehenderit nostrud tempor et aute labore est minim et.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="beige">
        <div class="wrapper">
            <h3>Division</h3>
        </div>
    </section>
    <footer>
        <div class="wrapper">
            <img src="/img/hestia_logo_blanc.png" alt="">
            <nav class="legal">
                <ul>
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Plan du site</a></li>
                    <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><img src="/img/insta.png" class="sns" alt=""></a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html> -->
<?php
    get_header('beige');
?>

<div class="main wrapper">
    <div class="post">

        <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                get_template_part('template-parts/content','archive');
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