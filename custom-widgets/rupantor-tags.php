<?php

class rupantor_latest_tags extends WP_Widget {

	public function __construct(){
		parent::__construct('rupantor-tags', 'Rupantor Tags', array(
			'description'		=> 'This widget will show your all Tags'
			));
	}

	 public function widget( $args, $instance ) {?>
	 <?php echo $args['before_widget']; ?>
                <?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>
					
					<?php $sabujt = new WP_Query(array(
					'post_type'		=> 'post',
					'posts_per_page'	=> $instance['songkha']
				)); ?>
                
                
                <div class="tags clearfix">
                	<?php while( $sabujt->have_posts() ) : $sabujt->the_post(); ?>

                		<a href="<?php the_permalink(); ?>"><?php the_tags(); ?></a>

                	<?php endwhile; ?>
                	
                </div>
            
				


             <?php echo $args['after_widget']; ?>
        
   <?php }


   public function form( $instance ) {?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title </label>

				<input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" id="<?php echo $this->get_field_id('title'); ?>">
			</p>

			<p>
				<label for="">Number of tags to how </label>
				<input type="number" name="<?php echo $this->get_field_name('songkha'); ?>" id="<?php echo $this->get_field_id('songkha') ?>" value="<?php echo $instance['songkha']; ?>">

			</p>

		
  
  <?php }


}

add_action('widgets_init', 'rupantor_tags_cloud');
function rupantor_tags_cloud(){
	register_widget('rupantor_latest_tags');
}
