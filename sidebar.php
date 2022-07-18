
<div class="vertical">
    <aside class="tags-aside">
        <h3>Tags</h3>
        <div class="tags-title">
        <?php
            $args = array('exclude' => '36 17'); // voir les explications plus bas
            $alltags = get_tags( $args );
            shuffle($alltags);
            $count=0;
            if ($alltags) {
                foreach($alltags as $tag) {
                    $count++;
                    echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
            if( $count >19 ) break;
            }
        }
        ?>
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