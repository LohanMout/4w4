<?php get_header();?>
    <div id="accueil" class="global clr-primaire-200">
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
                if(have_posts()):
                    while(have_posts()): the_post(); 
                    $titre = get_the_title();
                    ?>
                    <div class="carte">
                        <h3><?php the_title();?></h3> 
                        <p><?php echo wp_trim_words(get_the_content(), 10);?></p>
                        <?php the_category()?>
                        <a href="<?php the_permalink();?>">suite</a>
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
        <?php get_template_part("gabarits/vague2")?>
    </div>
    <?php get_footer()?>
</body>
<!-- <script>
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
    
</script> -->
</html>