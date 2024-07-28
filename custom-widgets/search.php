<?php

class rupantor_search_form extends WP_Widget {

	public function __construct(){
		parent::__construct('rupantor-form', 'Rupantor Search Form', array(
			'description'		=> 'This widget will help your visitor to find out what they want.'
			));
	}

	 public function widget( $args, $instance ) {?>
	 <?php echo $args['before_widget']; ?>
                <?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>

                <?php $valu = $instance['place']; ?>
		
                <form action="<?php echo home_url(); ?>" method="GET">
                  <input type="text" placeholder="" class="form-control">
                </form>

             <?php echo $args['after_widget']; ?>
        
   <?php }


   public function form( $instance ) {?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title </label>

				<input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" id="<?php echo $this->get_field_id('title'); ?>">
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('place') ?>">Text as Placeholder</label>
				<input type="number" name="<?php echo $this->get_field_name('place'); ?>" id="<?php echo $this->get_field_id('place') ?>" value="<?php echo $instance['place']; ?>">

			</p>

		
  
  <?php }


}

add_action('widgets_init', 'rupantor_searc_function');
function rupantor_searc_function(){
	register_widget('rupantor_search_form');
}
