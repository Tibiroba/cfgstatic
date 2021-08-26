<?php get_header();?>




<div class="content" id="content">

        <div class="container">
            <div class="row">
                <img src="" alt="">
            </div>
        </div>

        <?php if(have_posts()) : while(have_posts())  : the_post();?>

        <?php the_content();?>

<?php endwhile; else: endif;?>

</div>
</div>





<?php get_footer();?>