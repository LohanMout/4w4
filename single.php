<?php get_header();?>
    <div id="accueil" class="global">
        <section class="section">
            <h2><?php get_bloginfo("name")?></h2>
            <p><?php get_bloginfo("description")?></p>
            <a href="#accueil" class="lien">En savoir plus</a>
        </section>
    </div>
    <div id="evenement" class="global diagonal">
        <section class="section">
            <h3>Événement</h3>
            <div class="cours">
            <?php 
                if(have_posts()):
                    $titre = get_the_title();
                    ?>
                    <div class="carte">
                        <h2><?php the_title()?></h2> 
                        <p><?php the_content();?></p>
                    </div>
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