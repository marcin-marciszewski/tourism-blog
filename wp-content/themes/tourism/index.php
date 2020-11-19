<?php get_header(); ?>
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
                if(!is_single() && is_home() && function_exists('wpp_get_mostpopular')){
                    wpp_get_mostpopular([
                        'limit' => 3,
                        'wpp_start' => '<h4 id="popular-posts__header">Popular posts: </h4><div class="popular-posts">',
                        'wpp_end' => '</div>',
                        'post_html' => '<a href="{url}" class="popular-posts__item">{text_title}</a>' 
                    ]);
          
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 posts-container">
                <div class="top-advert">
                    <?php 
                        if(function_exists('quads_ad')){
                            quads_ad(['location' => 'tourism_header']);
                        }
                    ?>
                </div>
                <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        get_template_part('partials/post/content-excerpt');
                    }
                }
                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <div class="row">
            <?php 
                next_posts_link('&larr; Older');
                previous_posts_link('Newer &rarr;');
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
