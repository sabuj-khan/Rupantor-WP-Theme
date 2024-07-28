<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

    <!-- End Navigation Bar-->
   <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="" class="parallax-bg"><?php the_post_thumbnail(); ?></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper"><?php the_title(); ?><span class="red-dot"></span></h1>
                <h4>Our best work.</h4>
                <hr>
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>


     <section class="p-0 b-0">
      <div class="boxes">
        <div class="container-fluid">
          <div class="row">
          	<div class="port">

         		 <?php the_content(); ?>
          	</div>

          </div>
          <!-- end of row-->
        </div>
      </div>
    </section>
<?php endwhile; ?>


<?php get_footer(); ?>