<?php get_header();?>
    <div id="accueil" class="global">
        <section class="section">
            <h2>Accueil</h2>
            <p>destination par categorie</p>
            <a href="#accueil" class="lien">En savoir plus</a>
        </section>
    </div>
    <div id="evenement" class="global diagonal">
        <section class="section">
            <h3>categorie</h3>
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
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
            <a href="#evenement" class="lien">En savoir plus</a>
        </section>
    </div>
    <?php get_footer()?>
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