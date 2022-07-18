<?php get_header(); ?>
<main class="first">
    <article id="page-apprenant">
        <div id="title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div id="txtpres">
            <p><?php the_content(); ?></p>
        </div>
    </article>
    <div class="apprenants">
        <?php
            $arg = array(
                'post_type' => 'apprenant'
            );
                $student = new WP_Query($arg);

            if($student->have_post()){
                while($student->have_post()){
                    $student->the_post();
                    ?>
                    <?php the_title(); ?>
                    <?php
                }
            }
        ?>
    </div>
</main>
<?php get_footer(); ?>