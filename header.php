<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav id="head"> 
            <div class="logo">
                <a href="./index.php"><img src="<?php echo get_template_directory_uri(); ?> ./inc/img/logo.png" style="width: 130px; height: 130px" alt="logo"></a>
            </div>
            <ul>
                <li><a class="forhover test" href="">Les + populaires</a></li>
                <li><a class="forhover test"  href="<?= get_category_link(18); ?>">High Tech</a></li>
                <li><a class="forhover test"  href="<?= get_category_link(17); ?>">Web</a></li>
                <li><a class="forhover test" href="<?= get_category_link(8); ?>">Sécurité</a></li>
                <li><a class="forhover test" href="<?= get_category_link(16); ?>">Informatique</a></li>
                <li><a class="forhover test" href="http://localhost/wordpress/?page_id=80"> Equipe 122</a></li>
            </ul>
        </nav>
    </header>
    <nav id="forsticky">
        <div id="searchbar">
            <button id="btnCategory">Catégories</button>
            <?php get_search_form(); ?>
            <a href="#">Connexion</a>
        </div>
        <nav id="categorie">
            <h1>Choisir une catégorie</h1>
            <ul>
                <li><a href="<?= get_category_link(8); ?>">►Securité</a></li>
                <li><a href="<?= get_category_link(6); ?>">►Maintenance</a></li>
                <li><a href="<?= get_category_link(9); ?>">►Jeux</a></li>
                <li><a href="<?= get_category_link(5); ?>">►Reseaux</a></li>
                <li><a href="<?= get_category_link(7); ?>">►Programmation</a></li>
                <li><a href="<?= get_category_link(16); ?>">►Informatique</a></li>
            </ul>
        </nav>
    </nav>  