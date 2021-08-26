<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="<?php bloginfo('charset')?>">



  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $descricao; ?>">
  <meta name="author" content="Vowl Digital">
  <title><?php the_title(); ?></title>
  <meta name="googlebot" content="index,follow">
  <meta name="theme-color" content="#111111" />
  <meta name="robots" content="index,follow">
  <meta name="keywords" content="<?php echo $meta_keys ?>">
  <meta property="publisher" content="Vowl Digital">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:region" content="Brasil">
  <meta property="og:site_name" content="<?php echo $nome_site ?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <?php wp_head(); ?>
</head>









<body <?php body_class();?>>
<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <a class="header-logo__link" href="index.html">
                        <img class="header-logo__link--img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo">
                    </a>    
                </div>

                <div class="col-12 col-sm-8">
                    <nav class="header_menu navbar navbar-expand-lg">
                       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://centrogestalticofortaleza.com.br/">Home</a>
                            </li>

                            <li data-dropdown class="nav-item">
                                <a class="nav-link" href="#">O Centro</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Sobre o GFC</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Loja</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Blog</a>
                                    </li>
                                </ul>
                            </li>                           

                            <li class="nav-item">
                                <a class="nav-link" href="/propsi">Pro-Psi</a>
                            </li>

                            <li data-dropdown class="nav-item">
                                <a class="nav-link" href="#">A Clínica</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Marque Sua Consulta</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Terapeutas On-line</a>
                                    </li>
                                </ul>
                            </li>

                            <li data-dropdown class="nav-item">
                                <a class="nav-link" href="#">Escola de Gestalt-Terapia</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Nossos Cursos</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Corpo Docente</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Clínica-escola</a>
                                    </li>
                                </ul>
                            </li>

                            <li data-dropdown class="nav-item">
                                <a class="nav-link" href="#">A Revista</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Apresentação</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Regras de submissão</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a class="dropdown-link" href="">Envie sua publicação</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item nav-item__login">
                                <a class="nav-link nav-link__login" href="/dashboard">Portal</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<body class="<?php body_class();?>" >
  
<main>



  