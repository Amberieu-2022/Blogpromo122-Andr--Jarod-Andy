<?php
    get_header();
?>
    <article id="articles">
        <div id="title">
            <h1><?php the_title() ?></h1>
            <br>
            <h2><?php the_content() ?></h2>
        </div>
        <div id="txtpres">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi cupiditate ut id sint aliquam, fugiat mollitia accusantium unde et illum tempore, incidunt nisi soluta dolorum animi alias delectus iure autem explicabo, facere enim. Rem repellat eius corporis corrupti. Consequatur illo repudiandae ullam aperiam soluta deleniti exercitationem unde rem, facilis optio!</p>
        </div>
    </article>
    <div class="slideshow">
        <div class="mySlides fade">
            <div class="arrettxt">
                <h1>Jarod</h1>
                <h2>Code Error</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis laboriosam dignissimos nemo.</p>
            </div>
            <img class="ahAh" src="<?php echo get_template_directory_uri(); ?> ./inc/img/Jarod.png" alt="">
        
        </div>
        <div class="mySlides fade">
            <div class="arrettxt">
                <h1>Andy</h1>
                <h2>Code Error</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laborum voluptatem! Dignissimos.</p>
            </div>
            <img class="ahAh" src="<?php echo get_template_directory_uri(); ?> ./inc/img/Andy.png" alt="">
        </div>
        <div class="mySlides fade">
            <div class="arrettxt">
                <h1>Tiffany</h1>
                <h2>Code Error</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo tempore veritatis nemo!</p>
            </div>
            <img class="ahAh" src="<?php echo get_template_directory_uri(); ?> ./inc/img/Tiff.png" alt="">   
        </div>
        <div class="mySlides fade">  
            <div class="arrettxt">
                <h1>Xhesika</h1>
                <h2>Code Error</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur suscipit id!</p>
            </div>
            <img class="ahAh" src="<?php echo get_template_directory_uri(); ?> ./inc/img/Xhes.png" alt="">
          
        </div>
        <div class="mySlides fade">
            <div class="arrettxt">
                <h1>André</h1>
                <h2>Code Error</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus blanditiis qui atque.</p>
            </div>
            <img class="ahAh" src="<?php echo get_template_directory_uri(); ?> ./inc/img/Andre.png" alt="">
        </div>
        <div class="mySlides fade">
            <div class="arrettxt">
                <h1>Nathan</h1>
                <h2>Code Error</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus blanditiis qui atque.</p>
            </div>
            <img class="ahAh" src="<?php echo get_template_directory_uri(); ?> ./inc/img/Nathan.png" alt="">
        </div>
        <div class="mySlides fade">
            <div class="arrettxt">
                <h1>Lilian</h1>
                <h2>Code Error</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus blanditiis qui atque.</p>
            </div>
            <img class="ahAh" src="<?php echo get_template_directory_uri(); ?> ./inc/img/Lilian.png" alt="">
        </div>
        <a class="prev" id="prevbtn">&#10094</a>
        <a class="next" id="nextbtn">&#10095</a>
    </div>
<?php
    get_footer();
?>