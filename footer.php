 <?php global $rupantor; ?>
<footer id="footer-widgets">
      <div class="container">
        <div class="go-top">
          <a href="#top">
            <i class="ti-arrow-up"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-6 ov-h">
            <div class="row">

               <?php dynamic_sidebar('footer-f-sidebar'); ?>

             
         
            </div>
          </div>
          <div class="col-md-4 col-md-offset-2">
            <div class="row">
              <div class="col-md-12">
                <?php dynamic_sidebar('footer-s-sidebar'); ?>


              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </footer>
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="copy-text">
                <p><i class="icon-heart red mr-15"></i> <?php echo $rupantor['footer-copy']; ?></p>
              </div>
            </div>
            <div class="col-md-4">

              <?php wp_nav_menu(array(
                'theme_location'  => 'footer',
                'menu_class'      => 'list-inline'

              )); ?>

            

            </div>

            <div class="col-md-4">
              <?php dynamic_sidebar('copyright-sidebar'); ?>

             <!-- <div class="footer-social">
                <ul>
                  <li>
                    <a target="_blank" href="#"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-twitter-alt"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-instagram"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-dribbble"></i></a>
                  </li>
                </ul>
              </div> -->

            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of container-->
    </footer>
    <!-- end of footer-->
   

    <?php wp_footer(); ?>
  </body>


</html>