<?php 
/* Template Name: Page Login */

get_header(); ?>

<div id="content" style="background-image:url('<?php echo get_stylesheet_directory_uri();?>/img/back_top.png'); background-repeat:no-repeat; background-size:cover; background-position:bottom; max-height:70vh;">
<div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo get_stylesheet_directory_uri();?> /img/logo.png" alt="">
                </div>
                <div class="col-12">
<?php 
    if (is_user_logged_in(true)){
        ?>
        
                    <?php 
                    echo do_shortcode('[tutor_dashboard]');
                }else{
                    echo do_shortcode('[tutor_student_registration_form]');
                }

                    ?>

                </div>
            </div>
        </div>
         
    

?>





</div>




<?php get_footer();?>