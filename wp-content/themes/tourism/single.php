<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col col-md-9">
                <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();

                        global $post;
                        $author_ID = $post->post_author;
                        $author_URL = get_author_posts_url($author_ID);
                    }
                    ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class('single-post') ?>>
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="single-post__image">
                                <?php   if(has_post_thumbnail()){
                                    the_post_thumbnail('full');
                                } ?>
                            </div>
                            <div class="single-post__tags">
                                <?php the_tags('Tags: ', ' / '); ?>
                            </div>
                            <div class="single-post__content">
                                <?php the_content();
                                      $defaults = array(
                                          'before' => '<p class="text-center post-nav-links">' .__('Pages:', 'tourism'),
                                          'after' => '</p>',
                                      );
                                      wp_link_pages($defaults); ?>
                            </div>
                            <div class="single-post__author">
                                <div class="card">
                                    <div class="card-header">
                                        Posted by
                                        <a href="<?php $author_URL; ?>"></a><?php the_author(); ?></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="post-author-avatar">
                                            <?php echo get_avatar($author_ID, 90, '', false, ['class'=>'img-circle']) ?>
                                        </div>
                                        <p class="card-text"><?php echo nl2br(get_the_author_meta('description')); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post__related">
                                <?php 
                                    $categories = get_the_category();
                                    $rp_query = new WP_Query([
                                        'posts_per_page' => 2,
                                        'post__not_in' => [$post->ID],
                                        'cat' => !empty($categories) ? $categories[0]->term_id : null,
                                    ]);
                                    ?><div class="card-deck"><?php
                                    if($rp_query->have_posts()){
                                        while($rp_query->have_posts()){
                                            $rp_query->the_post();
                                            ?> 
                                            <div class="card">
                                                <a href="<?php the_permalink() ?>">
                                                    <?php the_post_thumbnail('thumbnail') ?>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php the_title() ?></h5>
                                                        <div class="card-text"><?php echo substr(get_the_excerpt(),0,150) ?></div>
                                                        <p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php    
                                        }
                                        wp_reset_postdata();
                                    }
                                    ?></div><?php
                                ?>
                            </div>
                            <div class="single-post__navigation">
                                <ul>
                                    <li><?php previous_post_link();?></li>
                                    <li><?php next_post_link(); ?></li>
                                </ul>
                            </div>
                            <div class="single-post__meta">
                                <ul class="post__info">
                                    <li><i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?></li>
                                    <li><i class="far fa-folder-open"></i><?php the_category(' '); ?></li>
                                    <li><a href=""><i class="far fa-comments"></i><?php comments_number('0'); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
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
