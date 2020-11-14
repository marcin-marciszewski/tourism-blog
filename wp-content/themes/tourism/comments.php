<?php 
if( post_password_required() ){
    return;
}
if(have_comments()){
?><div class="comments">
<h3 class="comments-number"><?php comments_number(); ?></h3>  
<?php

foreach($comments as $comment){
    ?> 
        <div class="single-comment">
            <div class="single-comment__author">
                <div class="single-comment__author-avatar">
                    <?php echo get_avatar($comment, 60, '','Author avatar', ['class' => 'avatar']) ?>
                </div>
            </div>
            <div class="single-comment__content">
            <div class="single-comment__info"><span><?php comment_author();?></span><span><?php comment_date();?></span></div>
                <?php comment_text(); ?>
            </div>
        </div>
    <?php
}
the_comments_pagination();
?></div><?php
}
comment_form([
    'comment_field' => '<div class="comment-field col">
                            <div class="form-group"> 
                                <label>Comment</label>
                                <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
                            </div>
                        </div>',
    'fields'        => [
        'author' => '<div class="row comments-fields"><div class="col-md-4">
                        <label>' . __('Name','tourism') . '</label>
                        <input type="text name="author" class="sm-form-control" />
                    </div>',
        'email' =>  '<div class="col-md-4">
                        <label>' . __('Email','tourism') . '</label>
                        <input type="text" name="email" class="sm-form-controls" />
                    </div>',
        'url'   =>  '<div class="col-md-4">
                        <label>' . __('Website','tourism') . '</label>
                        <input type="text" name="url" class="sm-form-controls" />
                    </div></div>',
    ],
    'class_submit' => 'btn btn-success',
    'label_submit' => __('Submit Comment', 'tourism'),
    'title_reply' => __('Leave a <span>Comment</span>', 'tourism')
]);

?>