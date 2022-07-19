<?php
get_header();
?>

<?php
    if(have_posts()){
        while(have_posts()){
            $category = get_the_category();
            $mycat = $category[0]->cat_name;
            $mycat2 = get_cat_id($mycat);
            the_post();
            
?>

<article>
    <p><?php the_post_thumbnail('thumbail');?></p>
    <div id="entete">
        <a href="<?= get_category_link($mycat2); ?>"><?php echo get_cat_name($mycat2);?></a>
        
        <h2><?php the_title(); ?></h2>
        <div id="mretdate">
            <p><img src="<?php echo get_template_directory_uri(); ?> ./inc/img/logo_icone/ineed.png" alt=""><?php the_author(); ?></p>
            <p><img src="<?php echo get_template_directory_uri(); ?>./inc/img/logo_icone/chrono.png" alt=""><?php the_date(); ?></p>
        </div>  
    </div>
</article>
<div id="contenu">
    <h2><?php the_content(); ?></h2>
</div>    
<div id="likecom">
    <div class="comment">
        <div>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?> ./inc/img/logo_icone/comment.png" alt="">Comment</a>
        </div>
        <div>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?> ./inc/img/logo_icone/like.png" alt="">Like</a>
        </div>
        <div>  
            <a href=""><img src="<?php echo get_template_directory_uri(); ?> ./inc/img/logo_icone/partage.png" alt="">Partager</a>
        </div>
        
    </div>
</div> 
<?php
    }
}
?>
   
    
<?php
get_footer();
?>