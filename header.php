<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <!-- <title>Parallax Template - Materialize</title> -->
  <?php  echo fontAwesome();
  echo myCss();
  ?>
  <?php wp_head(); ?>
  

</head >
<body <?php body_class(); ?>>
  <!-- HEADER -->
  <header class="navbar-fixed">
    




    <nav class="main-navigation transparent">
      <div class="container">
        <div class="nav-wrapper">
          <div class="brand-logo" style="margin-top: 8px;"><?php echo the_custom_logo(); ?></div>
          <a href="#" data-activates="mobile-demo" class="button-collapse "><i class="material-icons">menu</i></a>
          
          <?php wp_nav_menu( array('menu'              => 'menu1',
            'menu_id'       => 'primary-menu',
            'theme_location'    => 'menu1',
            'depth'             =>  2,
            'container'         => 'ul',
            'menu_class'    => 'right hide-on-med-and-down',
            'walker'      =>  new Materialize_Walker_Nav_Menu(),));?>
            
            

            
          </div>
        </nav>

        <!-- fim do container -->
      </div>         
      <!-- fim do container -->





    </header>


    <!-- FIM DO HEADER -->
    <?php 

    wp_nav_menu( array('menu'              => 'menu1',
      'menu_id'       => 'mobile-demo',
      'theme_location'    => 'menu1',
      'depth'             =>  1,
      'container'         => 'ul',
      'menu_class'    => 'side-nav corDrop',
      'walker'      =>  new Materialize_Walker_Nav_Menu(),));

      ?>