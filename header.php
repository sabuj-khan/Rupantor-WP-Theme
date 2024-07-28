<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
 
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Navigation Bar-->
    <header id="topnav">
      <div class="container">
        <!-- Logo container-->
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php global $rupantor; echo $rupantor['light-logo']['url']; ?>" alt="" class="logo-light">
            <img src="<?php  echo $rupantor['dark-logo']['url']; ?>" alt="" class="logo-dark">
          </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
          <div class="menu-item">
            <!-- Shopping cart-->
            <div class="cart">
              <a href="#">
                <i class="ti-bag"></i><span class="cart-number">2</span>
              </a>
              <div class="shopping-cart">
                
                <ul class="nav product-list">
                  <li>
                    <div class="product-thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/shop/2.jpg" alt="">
                    </div>
                    <div class="product-summary">
                      <a href="#">Premium Suit Blazer</a><span>$199.99</span>
                    </div>
                  </li>
                  <li>
                    <div class="product-thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/shop/5.jpg" alt="">
                    </div>
                    <div class="product-summary">
                      <a href="#">Reiss Vara Tailored Blazer</a><span>$199.99</span>
                    </div>
                  </li>
                </ul>
                <p><a href="#" class="btn btn-color btn-block btn-sm">Checkout</a>
                </p>
              </div>
            </div>
          </div>
          <div class="menu-item">
            <!-- Search Form-->
            <div class="search">
              <a href="#">
                <i class="ti-search"></i>
              </a>
              <div class="search-form">
                <form action="#" class="inline-form">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-color"><span><i class="ti-search"></i></span>
                    </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>

          </div>
          <div class="menu-item">
    
            <a class="navbar-toggle">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
          </div>
        </div>

        <div id="navigation">

          <?php wp_nav_menu(array(
            'theme_location'    => 'main',
            'menu_class'        => 'navigation-menu'
          )); ?>


        </div>
      </div>
    </header>