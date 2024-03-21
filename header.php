<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du moutquineux</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
</head>

<body>
    <div id="menu" class="global clr-agencement-primaire">
        <?php echo get_custom_logo()?>
        <label id="burger" for="chk_burger">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </label>
        <input type="checkbox" id="chk_burger">
        <header class="menu__header">
            <?php wp_nav_menu(array("container" => "nav")); ?>
        </header>
    </div>
    <div id="entete" class="global clr-agencement-secondaire">
        <header class="hero">
            <h1 class="clr-secondaire-400"><?php echo get_bloginfo("titre")?></h1>
            <h2 class="clr-secondaire-300"><?php echo get_bloginfo("description")?></h2>
            <button class="bouton clr-ternaire-100">Événements</button>
            <nav>
                <a href="#accueil">Accueil</a>
                <a href="#evenement">Événement</a>
                <a href="#galerie">galerie</a>
                <a href="#footer">footer</a>
            </nav>
        </header>
        <?php get_template_part("gabarits/vague") ?>
    </div>