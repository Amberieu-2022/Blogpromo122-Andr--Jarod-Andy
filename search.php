
<?php get_header(); ?>
<main class="first">
    <section class="first-post">
        <h2>Nos Actualités</h2>
        <div class="article">
            <div class="tags">
                <?php the_tags('','',''); ?>
            </div>
            <div class="article-one">
                <?php the_post_thumbnail('thumbmail'); ?>
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_date(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
    <?php get_sidebar() ; ?>
</main>
<?php get_footer(); ?>