<?php 
/*
* Template Name: Full Width Page
*/
get_header(); 
?> 
<section class="page-title">
    <div class="container">
        <h1><?php single_post_title(); ?></h1>
        <h2><?php 
        if(function_exists('the_subtitle')){
            the_subtitle(); 
        }
        ?></h2>
    </div>
</section>
<?php
/*
while(have_posts()){
    the_post();
    ?> 
    <section class="page-title">
        <h1><?php the_title(); ?></h1>
        <h2><?php 
        if(function_exists('the_subtitle')){
            the_subtitle(); 
        }
        ?></h2>
    </section>
    <?php
}
rewind_posts();
*/
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
                    while(have_posts()){
                        the_post();

                        global $post;
                        $author_ID = $post->post_author;
                        $author_URL = get_author_posts_url($author_ID);
                    }
                    ?>
                        <div class="single-post">
                             <div class="single-post__image">
                                <?php   if(has_post_thumbnail()){
                                    the_post_thumbnail('full');
                                } ?>
                            </div>
                            <div class="single-post__content">
                                <?php the_content();
                                      $defaults = array(
                                          'before' => '<p class="text-center post-nav-links">' .__('Pages:', 'tourism'),
                                          'after' => '</p>',
                                      );
                                      wp_link_pages($defaults); ?>
                            </div>
                        </div>
                    <?php
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php 
                if(comments_open() || get_comments_number()){
                    comments_template(); 
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
