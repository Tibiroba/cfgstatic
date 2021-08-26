<?php

/*Template Name: Front-Page/Home*/
get_header(); ?>


<div class="bg-top" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/back_top.png'); background-repeat:no-repeat; background-size:cover; background-position:bottom; max-height:70vh; background-color:#f5fffa;">


    <div class="container">
        <div class="row">
            <section class="introducao">



                <div class="slider">
                    <input class="slider__nav" type="radio" name="slider" title="slide1" checked="checked" />
                    <input class="slider__nav" type="radio" name="slider" title="slide2" />
                    <input class="slider__nav" type="radio" name="slider" title="slide3" />
                    <input class="slider__nav" type="radio" name="slider" title="slide4" />
                    <div class="slider__inner">
                        <div class="slider__contents">
                            <a href="" class="slider_link--itn">
                                <img class="" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cta1.png">
                            </a>
                        </div>

                        <div class="slider__contents">
                            <img class="" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cta2.png">
                        </div>

                        <div class="slider__contents">
                            <img class="" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cta3.png">
                        </div>

                        <div class="slider__contents">
                            <img class="" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cta4.png">
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>

</div>


<div id="content" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/back_top.png'); background-repeat:no-repeat; background-size:cover; background-position:center; background-color:#f5fffa;">
<section class="">
    <div class="container acessoRapido" style="">
        <div class="row">
            <div class="col-12">
                <div class="logo-top">
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" style="max-width:250px; text-align:center;" alt=""></a>
                </div>
            </div>
            <div class="col-4">
                <div class="cardAcesso"><a href=""><i class="fa fa-user-o fa-3x"></i>Painel</a></div>
            </div>
            <div class="col-4">
                <div class="cardAcesso"><a href=""><i class="fa  fa-calendar-o fa-3x"></i>Agende sua Consulta</a></div>
            </div>
            <div class="col-4">
                <div class="cardAcesso"><a href=""><i class="fa fa-book fa-3x"></i>Cursos</a></div>
            </div>
            
        </div>
    </div>

</section>

<section class="container-fluid cursosCall">
    <div class="row">
            <div class="col-12">
                <div class="cursosCall-box">
                    <i class="fa fa-leaf fa-2x" style="color:white;"></i>    
                <a href=""><p style="margin-top:40px;">Inscrições abertas</p></a>
                </div>
            </div>
    </div>
</section>

<section class="cursosTest" id="cursos" style="min-height:30vh;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                /*Call do shortcode para puxar os cursos*/

                 echo do_shortcode('[tutor_course count="3"]'); ?>
            </div>
        </div>
    </div>

</section>
<section class="container-fluid cursosCall">
    <div class="row">
            <div class="col-12">
                <div class="cursosCall-box">
                    <i class="fa fa-leaf fa-2x" style="color:white;"></i>    
                <a href=""><p style="margin-top:40px;">Colaboradores</p></a>
                </div>
            </div>
    </div>
</section>



<section class="colaboradores">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>              

                </div>

            </div>
        </div>
    </div>

</section>
</div>
</div>
</div>

</div>
<?php get_footer(); ?>