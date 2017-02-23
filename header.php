<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/images/pachi.png">
    <title><?php wp_title('|', true, 'right')?><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
      

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container mnav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!-- <a class="navbar-brand" href="#"><?php bloginfo('name')?></a> -->
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            
            <?php
                $args = array (
                'menu' => 'primary-menu',
                'menu_class' => 'nav navbar-nav',
                'container' => 'false'    
                );
    
                wp_nav_menu($args);
    
            ?>
        </div><!--/.nav-collapse -->
          
      </div>
    </div>
      

      
      
      
      

<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="text-center">
    <h1 class="display-3">Benson Tan</h1>
    <p class="lead">Junior Wordpress Developer</p>
    </div>
  </div>
</div>
