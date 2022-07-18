<?php 
    $query = new WP_Term_Query([
        'taxomony' => 'post_tag',
        'hide_empty' => false,
        'orderby' => 'count',
        'order' => 'DESC',
    ])
?>

<div class="vertical">
    <aside class="tags-aside">
        <h3>Tags</h3>
        <div class="tags-title">
        <?php foreach ($query->terms as $tag) : ?>
            <?php if($tag->count > 0){ ?>
                <a href="<?= get_term_link($tag->term_id); ?>">
                    <?= $tag->name ?>
                </a>
            <?php } ?>
        <?php endforeach ?>
        </div>
    </aside>
    <aside class="aside-posts">
        <h3>Plus de vidéos</h3>
        <div class="post">
            <img src="./image/Capture-du-2020-11-25-07-10-37.png" style="width:80px; height:80px">
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, assumenda.</h4>
        </div>
    </aside>
</div> 