<?php get_header(); ?>
<section class="page-title">
    <div class="container">
        <h1><?php _e('Search Results for: ', 'tourism'); ?><?php the_search_query(); ?></h1>
    </div>
</section>
<section id="posts" >
    <div class="container">
        <div class="row">
            <div class="col-md-9 posts-container">
                <div class="card mt-5">
                    <div class="card-header">
                        <?php _e( 'What are you searching for today?', 'tourism') ?>
                    </div>
                    <div class="card-body">
                        <?php get_search_form(); ?>  
                    </div>
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
