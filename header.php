<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>BlogPromo-122</title>
</head>
<body>
    <header>
        <nav id="head"> 
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/IMG_0097" style="width: 130px; height: 130px" alt="index.php">
            </div>
            <ul id="menu">
                <li><a class="forhover test" href="index.php">Les + populaires</a></li>
                <li><a class="forhover test"  href="<?php echo get_category_link(8); ?>"><?php echo get_cat_name(8); ?></a></li>
                <li><a class="forhover test"  href="<?php echo get_category_link(1); ?>"><?php echo get_cat_name(1); ?></a></li>
                <li><a class="forhover test" href="<?php echo get_category_link(7); ?>"><?php echo get_cat_name(7); ?></a></li>
                <li><a class="forhover test" href="<?php echo get_category_link(6); ?>"><?php echo get_cat_name(6); ?></a></li>
                <li><a class="forhover test" href="http://localhost/blogpromo/?page_id=115">Equipe P122</a></li>
            </ul>
        </nav>
    </header>
    <nav id="forsticky">
        <div id="searchbar">
            <button id="btnCategory">Catégories</button>
            <?php get_search_form() ; ?>
            <a href="#">Connexion</a>
        </div>
        <nav id="categorie">
            <h1>Choisir une catégorie</h1>
            <ul id="left-menu">
                <li><a class="forhover test"  href="<?php echo get_category_link(8); ?>"><?php echo get_cat_name(8); ?></a></li>
                <li><a class="forhover test"  href="<?php echo get_category_link(1); ?>"><?php echo get_cat_name(1); ?></a></li>
                <li><a class="forhover test" href="<?php echo get_category_link(7); ?>"><?php echo get_cat_name(7); ?></a></li>
                <li><a class="forhover test" href="<?php echo get_category_link(6); ?>"><?php echo get_cat_name(6); ?></a></li>
            </ul>
        </nav>
    </nav>
</body>