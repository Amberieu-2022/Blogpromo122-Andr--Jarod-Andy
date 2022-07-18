<?php get_header(); ?>
    <div>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <article>
            <div>
                <img src=""><?php the_post_thumbnail('thumbmail'); ?>
            </div>
            <section id="entete"> 
                <?php the_category(', '); ?>
                <h2><?php the_title(); ?></h2>
                <div id="mretdate">
                    <div id="mretdate-one">
                        <p><img src="http://localhost/blogpromo/wp-content/uploads/2022/07/ineed.png" alt="logo"><?php the_author(); ?></p>
                    </div>
                    <div id="mretdate-two">
                        <p><img src="http://localhost/blogpromo/wp-content/uploads/2022/07/chrono.png" alt="logo"><?php the_date(); ?></p>
                    </div>
                </div>
            </section>
        </article>
        <main>
            <section id="contenu">
                <?php the_content(); ?>
            </section>
        </main>
        <nav id="likecom">
            <div class="comment">
                <div>
                    <img src="http://localhost/blogpromo/wp-content/uploads/2022/07/comment.png" alt="comment">
                    <a href=""><?php comments_template(); ?></a>
                </div>
                <div>
                    <img src="http://localhost/blogpromo/wp-content/uploads/2022/07/icons8-partager-30.png" alt="partage">
                    <a href=""></a>
                </div>
                <div>
                    <img src="http://localhost/blogpromo/wp-content/uploads/2022/07/like.png" alt="like">
                    <p></p>
                </div>
            </div>
        </nav>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
