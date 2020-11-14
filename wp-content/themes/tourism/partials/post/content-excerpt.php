<div class="post">
    <div class="row">
        <div class="post__image col">
        <?php 
            if(has_post_thumbnail()){
                the_post_thumbnail('full', ['class' => 'image_fade post-image']);
            }
        ?>
        </div>
    </div>
    <div class="row">
        <div class="post__text col">
            <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?> </a>
            <p><?php the_excerpt(); ?></p>
            <ul class="post__info">
                <li><i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?></li>
                <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"></a><i class="fas fa-user-edit"></i><?php the_author(); ?></a></li>
                <li><i class="far fa-folder-open"></i><?php the_category(' '); ?></li>
                <li><a href=""><i class="far fa-comments"></i><?php comments_number('0'); ?></a></li>
            </ul>
            <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>
</div>