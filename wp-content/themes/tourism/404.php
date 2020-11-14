<?php 
get_header(); 
?> 
<section class="page-404">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4><?php _e("Sorry, this page does not exists",'tourism') ?></h4>
            </div>
            <div class="col-md-6">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>
<?php
?>
<?php get_footer(); ?>
