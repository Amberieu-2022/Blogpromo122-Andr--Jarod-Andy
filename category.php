<?php get_header(); ?>
<section class="categorie-name">
    <h2>Dans cette catégorie:<?php the_category(','); ?></h2>
</section>
<main class="first">
    <div class="posts-categorie">
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
        ?>
            <div class="post-cat">
                <img src=""><?php the_post_thumbnail('thumbmail'); ?>
                <div class="post-title-cat">
                    <h3><?php the_title(); ?></h3>
                    <span class="date"></span>
                    <a href="<?php the_permalink(); ?>">+ d'infos</a>
                </div>
            </div>
        <?php
        }
    }
?>
    </div>
<?php get_sidebar(); ?> 
</main>
<?php get_footer(); ?>