<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="ylit.cl" content="">

    <title>Travel Tips Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>IndiceController/quienesSomos">Quines Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>IndiceController/contactanos">Contactanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url() ?>assets/img/paisaje.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Travel Tips Blog</h1>
              <span class="subheading">Un blog creado para compartir tus propios tips de viajes.</span>
              <span class="subheading">Desarrollado por <a href="https://ylit.cl/">YLIT</a></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="<?php echo base_url() ?>">
              <h1 class="post-title">
                Índice.
              </h1>
              <h2 class="post-subtitle">
                Ésta página contiene el índice del tutorial, haz click a continuación para ir al tema de tu interés.
              </h2>
            </a>
            <p class="post-meta">Posteado por
              <a href="#">Luis Navarro</a>
              el 05 de Julio de 2018
            </p>
          </div>
          
          <hr>

          <div class="post-preview">
            <a href="<?php echo base_url() ?>IndiceController/descripcion">
              <h2 class="post-title">
                Descripción.
              </h2>
              <h3 class="post-subtitle">
                Que es Git y GitHub, cuales son sus diferencias.
              </h3>
            </a>
            <p class="post-meta">Posteado por
              <a href="#">Luis Navarro</a>
              el 05 de Julio de 2018
            </p>
          </div>
          
          <hr>
              <?php include('menu.php');?>
              <?php if (!empty($entries)) : ?>
                <?php foreach($entries as $entry) : ?>
                        <h2><?=anchor(base_url().'blog/view/'.$entry->id,$entry->title)?></h2>
                        Author: <?=$entry->author?><br />
                        Date: <?=convertDateTimetoTimeAgo($entry->date)?><hr />
                <?php endforeach; ?>
              <?php else : ?>
                <h1>No entries</h1>
              <?php endif; ?>
          <hr>

          <div class="post-preview">
            <a href="<?php echo base_url() ?>IndiceController/instalacion">
              <h2 class="post-title">
                Instalación Git.
              </h2>
            </a>
            <p class="post-meta">Posteado por
              <a href="#">Luis Navarro</a>
              el 05 de Julio de 2018
            </p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="<?php echo base_url() ?>IndiceController/basicos">
              <h2 class="post-title">
                Comandos básicos.
              </h2>
            </a>
            <p class="post-meta">Posteado por
              <a href="#">Luis Navarro</a>
              el 05 de Julio de 2018
            </p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Capítulo Siguiente &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; YLIT 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/js/clean-blog.min.js"></script>

  </body>

</html>

