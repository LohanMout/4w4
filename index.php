<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du moutquineux</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
</head>
<body>
    <div id="entete" class="global">
        <header class="entete__header">
            <h1>Thème de Lohan Moutquin</h1>
            <h2>4W4-Conception d'interface et développement web</h2>
            <h3>TIM - College de Maisonneuve</h3>
            <button class="bouton">Événements</button>
            <nav>
                <a href="#accueil">Accueil</a>
                <a href="#evenement">Événement</a>
                <a href="#galerie">galerie</a>
                <a href="#footer">footer</a>
            </nav>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div id="accueil" class="global">
        <section class="section">
            <h2>Accueil</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quidem aperiam, numquam voluptatum fugiat mollitia harum dolorem quod corporis similique porro dolorum veniam iste a tempora quo. Quas, illo nam?</p>
            <a href="#accueil" class="lien">En savoir plus</a>
        </section>
    </div>
    <div id="evenement" class="global diagonal">
        <section class="section">
            <h3>Événement</h3>
            <div class="cours">
            <?php 
            /*
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        the_title('<h3>', '</h3>');
                        echo wp_trim_words(get_the_content(), 30);
                    }
                }
            */

                if(have_posts()):
                    while(have_posts()): the_post(); 
                    $titre = get_the_title();
                    $sigle = substr($titre,0,7);
                    $duree = substr($titre, -6, 6);
                    $nomCours = trim(substr($titre, 7), $duree);
                    //titre
                    //strpos()
                    ?>
                    <div class="carte">
                        <p><?php echo $sigle;?></p>
                        <h3><?php echo $nomCours;?></h3> 
                        <h6><?php echo $duree?></h6>
                        <p><?php echo wp_trim_words(get_the_content(), 30);?></p>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
            <a href="#evenement" class="lien">En savoir plus</a>
        </section>
    </div>
    <div id="galerie" class="global">
        <section class="section">
            <h4>Galerie</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, necessitatibus eligendi. Eius dicta itaque quisquam excepturi eveniet voluptatibus dolorum. Provident asperiores culpa, molestiae animi eveniet quaerat consequatur eos vel commodi?</p>
            <a href="#galerie" class="lien">En savoir plus</a>
        </section>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill: var(--couleur-arriere-footer)"></path>
            </svg>
        </div>
    </div>
    <div id="footer" class="global">
        <footer>
            <h5>Footer</h5>
            <h6>petit footer</h6>
            <img src="images/blue.png">
        </footer>
    </div>
</body>
<script>
    let root = document.documentElement;
    let style = getComputedStyle(root);
    let u1 = style.getPropertyValue("--u1")
    let u1Plus = Number(u1) + 0.2;

    function changerCouleur(){
        root.style.setProperty("--u1", u1Plus);
        if(u1Plus >= 360){
            u1Plus = 0;
        }
        else{
            u1Plus = u1Plus + 0.2;
        }
    }
    setInterval(changerCouleur, 20);
    
</script>
</html>