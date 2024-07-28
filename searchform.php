<?php
 
class My_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct( 'my-text', 'My Text');
 
    }
 
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
 
        echo '<div class="textwidget">';
 
        echo  $instance['text'];
 
        echo '</div>';
 
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">Title: </label>

            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'text_domain' ); ?></label>

            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <?php
    }
 
}
$my_widget = new My_Widget();


        add_action( 'widgets_init', function() {
            register_widget( 'My_Widget' );
        });




    


     

class wpb_widget extends WP_Widget {
  
function __construct() {
parent::__construct('wpb_widget','WPBeginner Widget', array('Sample widget based on WPBeginner Tutorial'));
}
  
// Creating widget front-end
  
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
  
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
  
// This is where you run the code and display the output
echo __( 'Hello, World!', 'wpb_widget_domain' );
echo $args['after_widget'];
}
          
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
 
// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
















// simple file code



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

            <?php  while( have_posts() ) : the_post(); ?>

            <article class="post-single">

              <div class="post-info">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h6 class="upper"><span>By</span><a href="<?php the_author(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span><span class="dot"></span><?php the_tags(); ?></h6>
              </div>

              <div class="post-media">
                <div class="media-video">

                  <?php echo wp_oembed_get(get_post_meta(get_the_id(), '_video', true)); ?>
                               
                </div>

                <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">

                    <ul class="slides">
                      <?php 
                      $pictures = get_post_meta( get_the_id(), '_galley', true);
                      foreach($pictures as $picture) : ?>
                      <li>
                        <img src="<?php echo $picture; ?>" alt="">
                      </li>

                    <?php endforeach; ?>

                    </ul>
                  </div> 
                <?php the_post_thumbnail(); ?>

              </div>
              <div class="post-body">
             
                 <?php the_content(); ?>
              </div>
            </article>

          <?php endwhile; ?>


            <!-- end of article-->
            <div id="comments">
              <h5 class="upper">3 Comments</h5>
              <ul class="comments-list">
                <li>
                  <div class="comment">
                    <div class="comment-pic">
                      <img src="images/team/1.jpg" alt="" class="img-circle">
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
                          <img src="images/team/2.jpg" alt="" class="img-circle">
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
                      <img src="images/team/3.jpg" alt="" class="img-circle">
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
            <!-- end of comment form-->
          </div>


          <?php get_sidebar(); ?>

        </div>
        <!-- end of row-->

      </div>
    </section>

    <?php get_footer(); ?>