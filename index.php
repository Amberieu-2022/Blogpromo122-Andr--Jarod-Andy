<?php
get_header();
?>

<div class="welcome">
    <h3>Bienvenue sur le Blog informatique de Promo-122 ! Vous trouverez ici des conseils divers, quelques actualités importantes: informatique en général, gaming et dépannage.</h3>
</div>
<main class="first">
    <section class="first-post">
        <h2>Nos Actualités</h2>
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
        ?>
        <div class="article">
            <div class="tags">
                <?php the_category(', '); ?>
            </div>
            <p><?php the_date(); ?></p>
            <div class="article-one">
                <?php the_post_thumbnail('thumbmail'); ?>
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">En savoir plus</a>
                </div>
            </div>
        </div>
        <?php
        }
    }
?>
    </section>  
    <?php get_sidebar() ; ?>  
</main>

<?php
get_footer();
?>