<?php get_header();?>

<div class="content" id="content">
    





        <div class="container-fluid">
            <div class="row">

            <div class="col-12">
        <?php if(have_posts()) : while(have_posts())  : the_post();?>
        
    </div> 
  </div>
        </div>

<?php endwhile; else: endif;?>

</div>



</div>


<?php get_footer();?>