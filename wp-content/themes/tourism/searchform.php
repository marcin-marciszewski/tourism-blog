<?php $unique_id = esc_attr(uniqid('search-form-')); ?>

<form action="<?php echo esc_url(home_url('/')); ?>" role="search" method="get" class="search-foerm">
    <div class="input-group">
        <input type="search" name="s" 
               id="<?php echo $unique_id; ?>"
               class="form-control" 
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e('Search','udemy'); ?>"/>
        <span class="input-group-btn">
            <button type="submit" class="btn btn-danger"><i class="fas fa-search"></i>

</button>
        </span>
    </div>
</form>