<?php get_header(); ?>

<?php global $rupantor; ?>

    <!-- End Navigation Bar-->
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo $rupantor['blog-header-image']['url']; ?>" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper"><?php echo $rupantor['blog-header-title']; ?><span class="red-dot"></span></h1>
                <h4><?php echo $rupantor['blog-header-subtitle']; ?></h4>
                <hr>
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="blog-posts">


              <?php while( have_posts() ) : the_post(); ?>

               <?php get_template_part('formates/content', get_post_format()); ?>

              <?php endwhile; ?>  

            </div>
              <?php
              if(function_exists('the_posts_pagination')){
                 the_posts_pagination(array(
                  'prev_text'   => '<span aria-hidden="true"><i class="ti-arrow-left"></i></span>',
                  'next_text'   => '<span aria-hidden="true"><i class="ti-arrow-right"></i></span>',
                  )); 
               } ?>

            
            <!-- end of pagination-->
          </div>
          <?php get_sidebar(); ?>

        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </section>
    <!-- Footer-->
    


    <?php get_footer(); ?>