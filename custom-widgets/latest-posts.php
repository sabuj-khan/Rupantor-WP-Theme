<?php

class rupantor_latest_posts extends WP_Widget {

	public function __construct(){
		parent::__construct('rupantor-latest-posts', 'Rupantor Latest Posts', array(
			'description'		=> 'This widget will show your all postsz'
			));
	}

	 public function widget( $args, $instance ) {?>
	 <?php echo $args['before_widget']; ?>
                <?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>
				<?php $sabujp = new WP_Query(array(
					'post_type'		=> 'post',
					'posts_per_page'	=> $instance['songkha']
				)); ?>

                <ul class="nav">
				<?php while( $sabujp->have_posts() ) : $sabujp->the_post(); ?>


                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><i class="ti-arrow-right"></i>
                  	<?php if( !empty($instance['tarikh']) ) : ?>
                  	<span><?php the_time('d M, Y'); ?></span>
                  	<?php endif ?>
                  </a>
                  </li>

               <?php endwhile; ?>

                </ul>

             <?php echo $args['after_widget']; ?>
        
   <?php }


   public function form( $instance ) {?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title is Here</label>

				<input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" id="<?php echo $this->get_field_id('title'); ?>">
			</p>

			<p>
				<label for="">Number of posts to how </label>
				<input type="number" name="<?php echo $this->get_field_name('songkha'); ?>" id="<?php echo $this->get_field_id('songkha') ?>" value="<?php echo $instance['songkha']; ?>">

			</p>

			<p>
				<input type="checkbox" name="<?php echo $this->get_field_name('tarikh'); ?>" id="<?php echo $this->get_field_id('tarikh'); ?>" value="tarikh" >

				<label for="<?php echo $this->get_field_id('tarikh'); ?>">Show Date and Time</label>
			</p>
  
  <?php }


}

add_action('widgets_init', 'rupantor_latesst_post');
function rupantor_latesst_post(){
	register_widget('rupantor_latest_posts');
}
