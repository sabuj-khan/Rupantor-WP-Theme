<?php 


// Slider Shortcode

add_shortcode('slider', 'slider_function');

function slider_function(){

	ob_start(); ?>

<section id="home">

      <div id="home-slider" class="flexslider">
        <ul class="slides">

        	<?php 

        	$r_slider = new WP_Query(array(
        		'post_type'			=> 'sliders',
        		'posts_per_page'	=> 7
        		));
        	while( $r_slider->have_posts() ) : $r_slider->the_post(); ?>
          
          <li>
            <?php the_post_thumbnail(); ?>
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1><?php the_title(); ?><span class="red-dot"></span></h1>
                  <h6><?php echo get_post_meta(get_the_id(), '_slider', true ); ?></h6>

                  <p>
                    <?php
                    $f_button = get_post_meta(get_the_id(), '_fbuttont', true);
                    $f_buttonu = get_post_meta(get_the_id(), '_fbuttonu', true);

                    if( !empty($f_button) ) : ?>
                    <a href="<?php echo $f_buttonu; ?>" class="btn <?php
                      if( get_post_meta(get_the_id(), '_fbuttonty', true) == 'red' ){
                        echo 'btn-color';
                      }else{
                        echo 'btn-light-out'; } ?> ">
                      <?php echo $f_button; ?>
                    </a>
                    <?php endif; ?>

                    <?php 
                    $s_button = get_post_meta(get_the_id(), '_sbuttont', true);
                    $s_buttonu = get_post_meta(get_the_id(), '_sbuttonu', true);

                    if( !empty($s_button) ) : ?>

                    <a href="<?php echo $s_buttonu; ?>" class="btn  <?php if( get_post_meta(get_the_id(), '_sbuttonty', true) == 'transp' ){
                        echo 'btn-light-out';
                      }else{
                        echo 'btn-color'; } ?>">
                      <?php echo $s_button; ?>
                    </a>

                  <?php endif; ?>
                  </p>

                </div>
              </div>
            </div>
          </li>

      	<?php endwhile; ?>

        </ul>
      </div>

    </section>

	<?php return ob_get_clean();
}

// Simple Section Shortcode

add_shortcode('simple-section', 'simple_section_function');

function simple_section_function($attr, $content= NULL){

        $simple = extract(shortcode_atts(array(
            'title'     => 'This is the Title',
            'subtitle'  => 'Thhis is the subtitle',
          ), $attr ));

	ob_start(); ?>

<section id="about">
      <div class="container">
        <div class="title center">
          <h4 class="upper"><?php echo $subtitle; ?></h4>
          <h2><?php echo $title; ?><span class="red-dot"></span></h2>
          <hr>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <p class="lead-text serif text-center">
                <?php echo do_shortcode($content); ?>
              </p>
            </div>
          </div>        
        </div>      
      </div>
    </section>


	<?php return ob_get_clean();
}

// Simple Expertise Section

add_shortcode('expertise', 'expertise_function');

function expertise_function($attr, $content= NULL){
        $expertise = extract(shortcode_atts(array(
          'title'           => 'This is Title',
          'subtitle'        => 'This is the subtitle',
          'bgimage'         => '',
          'first_ficon'     => 'focus',
          'first_bicon'     => 'focus',
          'first_title'     => 'This is Title',
          'first_subtitle'  => 'This is the subtitle',
          'se_ficon'        => 'layers',
          'se_bicon'        => 'layers',
          's_title'         => 'Title',
          's_subtitle'      => 'Subtitle',
          't_ficon'         => 'mobile',
          't_bicon'         => 'mobile',
          't_title'         => 'Title',
          't_subtitle'      => 'Subitle',
          'f_ficon'         => 'globe',
          'f_bicon'         => 'globe',
          'f_title'         => 'Title',
          'f_subtitle'      => 'Subtitle'
          ), $attr));
	ob_start(); ?>
	
	<section class="p-0 b-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-4 img-side img-left mb-0">
            <div class="img-holder">

              <?php $khaan = wp_get_attachment_image_src($bgimage, 'full'); ?>
              <img src="<?php echo $khaan[0]; ?>" alt="" class="bg-img">
              <div class="centrize">
                <div class="v-center">
                  <div class="title txt-xs-center">
                    <h4 class="upper"><?php echo $subtitle; ?></h4>
                    <h3><?php echo $title; ?><span class="red-dot"></span></h3>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of side background image-->
          <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
            <div class="services">
              <div class="row">
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-<?php echo $first_ficon; ?>"></i><span class="back-icon"><i class="icon-<?php echo $first_bicon; ?>"></i></span>
                    <h4><?php echo $first_title; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $first_subtitle; ?></p>
                  </div>
                  <!-- end of service-->
                </div>
                <div class="col-sm-6 border-bottom">
                  <div class="service"><i class="icon-<?php echo $se_ficon; ?>"></i><span class="back-icon"><i class="icon-<?php echo $se_bicon; ?>"></i></span>
                    <h4><?php echo $s_title; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $s_subtitle; ?></p>
                  </div>
                  <!-- end of service-->
                </div>
                <div class="col-sm-6 border-bottom border-right">
                  <div class="service"><i class="icon-<?php echo $t_ficon; ?>"></i><span class="back-icon"><i class="icon-<?php echo $t_bicon; ?>"></i></span>
                    <h4><?php echo $t_title; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $t_subtitle; ?></p>
                  </div>
                  <!-- end of service-->
                </div>
                <div class="col-sm-6 border-bottom">
                  <div class="service"><i class="icon-<?php echo $f_ficon; ?>"></i><span class="back-icon"><i class="icon-<?php echo $f_bicon; ?>"></i></span>
                    <h4><?php echo $f_title; ?></h4>
                    <hr>
                    <p class="alt-paragraph"><?php echo $f_subtitle; ?></p>
                  </div>
                  <!-- end of service-->
                </div>
              </div>
            </div>
            <!-- end of row-->
          </div>
        </div>
        <!-- end of row -->
      </div>
    </section>


	<?php return ob_get_clean();
}


// Vision Section


add_shortcode('vision', 'vission_function');

function vission_function($attr, $content=NULL){

      $vission = extract(shortcode_atts(array(
        'title'       => 'Title',
        'subtitle'    => 'Subtitle',
        'bgimage'     => '',
        'f_title'     => 'First Title',
        'f_subtitle'     => 'First Sub Title',
        's_title'     => 'Second Title',
        's_subtitle'     => 'Second Sub Title',
        't_title'     => 'Third Title',
        't_subtitle'     => 'Third Sub Title',
        'fo_title'     => 'Four Title',
        'fo_subtitle'     => 'Four Sub Title',

             ),$attr));
  ob_start(); ?>
      
     <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-4 img-side img-right">
            <div class="img-holder">
              <?php $khaan = wp_get_attachment_image_src($bgimage, 'full'); ?>
              <img src="<?php echo $khaan[0]; ?>" alt="" class="bg-img">
            </div>
          </div>
          <!-- end of side background image-->
        </div>
        <!-- end of row-->
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-8">
            <div class="title">
              <h4 class="upper"><?php echo $subtitle; ?></h4>
              <h3><?php echo $title; ?><span class="red-dot"></span></h3>
              <hr>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="text-box">
                  <h4 class="upper small-heading"><?php echo $f_title; ?></h4>
                  <p><?php echo $f_subtitle; ?></p>
                </div>
                <!-- end of text box-->
              </div>
              <div class="col-sm-6">
                <div class="text-box">
                  <h4 class="upper small-heading"><?php echo $s_title; ?></h4>
                  <p><?php echo $s_subtitle; ?></p>
                </div>
                <!-- end of text box-->
              </div>
              <div class="col-sm-6">
                <div class="text-box">
                  <h4 class="upper small-heading"><?php echo $t_title; ?></h4>
                  <p><?php echo $t_subtitle; ?></p>
                </div>
                <!-- end of text box-->
              </div>
              <div class="col-sm-6">
                <div class="text-box">
                  <h4 class="upper small-heading"><?php echo $fo_title; ?></h4>
                  <p><?php echo $fo_subtitle; ?></p>
                </div>
                <!-- end of text box-->
              </div>
            </div>
            <!-- end of row              -->
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </section>
    

  <?php return ob_get_clean();

}



// Isotop 

add_shortcode('filtering', 'isotop_filtering_function');

function isotop_filtering_function($attr, $content= NULL){

  $filter = extract(shortcode_atts(array(
      'title'     => 'Title',
      'subtitle'  => ''
    ), $attr));

  ob_start(); ?>


  <section id="portfolio" class="pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title m-0 txt-xs-center txt-sm-center">
              <h4 class="upper"><?php echo $subtitle; ?></h4>
              <h2 class="upper"><?php echo $title; ?><span class="red-dot"></span></h2>
              <hr>
            </div>
          </div>
          <div class="col-md-6">
            <ul id="filters" class="no-fix mt-25">
              <li data-filter="*" class="active">All</li>

              <?php 
              $terms = get_terms('texonomy');

              foreach( $terms as $term ) :
               ?>

              <li data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>

             <?php endforeach; ?>

            </ul>
            <!-- end of portfolio filters-->
          </div>
        </div>
        <!-- end of row-->
      </div>

      <div class="section-content pb-0">
        <div id="works" class="four-col wide mt-50">

        <?php 

        $portfolio = new WP_Query(array(
          'post_type' => 'portfolios',
          'posts_per_page'  => 8,
          'order'           => 'DSC'
          ));
        while( $portfolio->have_posts()) : $portfolio->the_post(); ?>

          <div class="work-item <?php
                      $terms = get_the_terms(get_the_id(), 'texonomy');
                          foreach( $terms as $term ){
                            echo $term->slug." ";}?>">
            <div class="work-detail">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                <div class="work-info">
                  <div class="centrize">
                    <div class="v-center">
                      <h3><?php the_title(); ?></h3>

                      <p><?php
                      $terms = get_the_terms(get_the_id(), 'texonomy');
                          foreach( $terms as $term ){
                            echo $term->name." ";}?>
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

        <?php endwhile; ?>

        </div>
      </div>
    </section>


  <?php return ob_get_clean();
}


// Clients section Shortcode

add_shortcode('clients', 'clients_function');

function clients_function($attr, $content=NULL){

  $clients = extract(shortcode_atts(array(
      'title'       => 'Clients',
      'subtitle'    => 'Subtitle of Clients'
    ), $attr));

  ob_start(); ?>

  <section>
      <div class="container">
        <div class="title center">
          <h4 class="upper"><?php echo $subtitle; ?></h4>
          <h3><?php echo $title; ?><span class="red-dot"></span></h3>
          <hr>
        </div>
        <div class="section-content">
          <div class="boxes clients">
            <div class="row">
              <?php 
                $client = new WP_Query(array(
                  'post_type'   => 'clients',
                  'posts_per_page'  => '6'
                  ));
                while($client->have_posts()) : $client->the_post(); ?>  

              <div class="col-sm-4 col-xs-6 border-right border-bottom">
                <div class="image" data-animated="true" data-delay="500" class="client-image">
                  <?php the_post_thumbnail(); ?>
                </div>                
              </div>

            <?php endwhile; ?>
           

            </div>
           
          </div>
        </div>
       
      </div>
    </section>


  <?php return ob_get_clean();

}


// Testimonials Section

add_shortcode('testimonials', 'testimonials_function');

function testimonials_function($attr, $content=NULL){

        $testimonials = extract(shortcode_atts(array(
          'title'     => 'Title',
          'bgimage'   => ''
          ),$attr));
        ob_start(); ?>

        <section class="parallax">
          <?php $khaan = wp_get_attachment_image_src($bgimage, 'full'); ?>
      <div data-parallax="scroOll" data-image-src="<?php echo $khaan[0]; ?>" class="parallax-bg"></div>
      <div class="parallax-overlay pb-50 pt-50">
        <div class="container">
          <div class="title center">
            <h3><?php echo $title; ?><span class="red-dot"></span></h3>
            <hr>
          </div>


          <div class="section-content">

            <div id="testimonials-slider" data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}" class="flexslider nav-outside">
             

              <ul class="slides">

                <?php 
                $someth = new WP_Query(array(
                  'post_type'       => 'testimonials',
                  'posts_per_page'  => 11
                  ));
                while( $someth->have_posts() ) : $someth->the_post(); ?>


                <li>
                  <blockquote>
                   <?php the_content(); ?>
                    <footer><?php the_title(); ?> - <?php echo get_post_meta( get_the_id(), '_designation', true); ?>.</footer>
                  </blockquote>
                </li>

              <?php endwhile; ?>

                
              </ul>
            </div>
          </div>


        </div>
        <!-- end of container-->
      </div>
    </section>



        <?php return ob_get_clean();
}




// blog Slider



add_shortcode('blog-slider', 'blog_slider_function');

function blog_slider_function($attr, $content=NULL){

    $bg_slider = extract(shortcode_atts(array(
      'bgimage'     => ''
      ),$attr));

  ob_start(); ?>

<section id="home">

      <div id="home-slider" class="flexslider">
        <ul class="slides">

          <?php 

          $r_slider = new WP_Query(array(
            'post_type'     => 'post',
            'posts_per_page'  => 7
            ));
          while( $r_slider->have_posts() ) : $r_slider->the_post(); ?>
          
          <li>
            <?php if(the_post_thumbnail()==NULL) : ?> 
            
             <?php echo $bgimage; ?>
           
            <?php else : ?>
             <?php the_post_thumbnail(); ?>
          
            
            <?php endif; ?>



            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h2><?php the_title(); ?><span class="red-dot"></span></h2>
                  <h6><?php echo wp_trim_words(get_the_content(), '50', ''); ?></h6>
                  
                  <p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a>
                  </p>

                </div>
              </div>
            </div>
          </li>

        <?php endwhile; ?>

        </ul>
      </div>

    </section>

  <?php return ob_get_clean();
}


 