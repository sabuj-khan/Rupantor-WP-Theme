<?php get_header(); ?>

<?php global $rupantor; ?>

    <!-- End Navigation Bar-->
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo $rupantor['blogimage']['url']; ?>" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper"><?php echo $rupantor['blogtitle']; ?><span class="red-dot"></span></h1>
                <h4><?php echo $rupantor['blogsub']; ?></h4>
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

 <div id="comments">
              <h5 class="upper">3 Comments</h5>
              <ul class="comments-list">
                <li>
                  <div class="comment">
                    <div class="comment-pic">
                      <img src="<?php echo get_template_directory_uri(); ?>./images/team/1.jpg" alt="" class="img-circle">
                    </div>
                    <div class="comment-text">
                      <h5 class="upper">Jesse Pinkman</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime distinctio et quam possimus velit dolor sunt nisi neque, harum, dolores rem incidunt, esse ipsa nam facilis eum doloremque numquam veniam.</p><a href="#" class="comment-reply">Reply</a>
                    </div>
                  </div>
                  <ul class="children">
                    <li>
                      <div class="comment">
                        <div class="comment-pic">
                          <img src="<?php echo get_template_directory_uri(); ?>./images/team/2.jpg" alt="" class="img-circle">
                        </div>
                        <div class="comment-text">
                          <h5 class="upper">Arya Stark</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque porro quae harum dolorem exercitationem voluptas illum ipsa sed hic, cum corporis autem molestias suscipit, illo laborum, vitae, dicta ullam minus.</p><a href="#"
                          class="comment-reply">Reply</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="comment">
                    <div class="comment-pic">
                      <img src="<?php echo get_template_directory_uri(); ?>./images/team/3.jpg" alt="" class="img-circle">
                    </div>
                    <div class="comment-text">
                      <h5 class="upper">Rust Cohle</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti sit beatae natus! Beatae velit labore, numquam excepturi, molestias reiciendis, ipsam quas iure distinctio quia, voluptate expedita autem explicabo illo.</p>
                      <a
                      href="#" class="comment-reply">Reply</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>



            <!-- end of comments-->
            <div id="respond">
              <h5 class="upper">Leave a comment</h5>
              <div class="comment-respond">
                <form class="comment-form">
                  <div class="form-double">
                    <div class="form-group">
                      <input name="author" type="text" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group last">
                      <input name="email" type="text" placeholder="Email" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea placeholder="Comment" class="form-control"></textarea>
                  </div>
                  <div class="form-submit text-right">
                    <button type="button" class="btn btn-color-out">Post Comment</button>
                  </div>
                </form>
              </div>
            </div>
             

            
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



   