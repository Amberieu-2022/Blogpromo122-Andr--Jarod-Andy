<?php get_header(); ?>
<section class="categorie-name">
    <h2>Résultats de votre recherche:</h2>
</section>
<main class="first">
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
        ?>
        <div class="posts-categorie">
            <div class="post-cat">
                <img src=""><?php the_post_thumbnail('thumbmail'); ?>
                <div class="post-title-cat">
                    <h3><?php the_title(); ?></h3>
                    <span class="date"></span>
                    <a href="<?php the_permalink(); ?>">+ d'infos</a>
                </div>
            </div>
        </div>
        <?php
        }
    }
?>
<?php get_sidebar(); ?> 
</main>
<?php get_footer(); ?>