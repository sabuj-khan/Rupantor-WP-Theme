<?php

add_shortcode('gallery', 'rupantor_gallery');

function rupantor_gallery($attr){
	$sabuj = shortcode_atts(array(
		'ids'		=> ''
		),$attr);

	extract($sabuj);

	$rup = explode(',', $ids);

	ob_start(); ?>
<div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: 	true" class="flexslider nav-outside">

	<ul class="slides">
		<?php foreach($rup as $ru ) : ?>
			
			<?php $khan = wp_get_attachment_image_src($ru, 'full'); ?>

			<li><img src="<?php echo $khan[0]; ?>" alt="gallery"></li>
		<?php endforeach; ?>
	</ul>
</div>

	<?php return ob_get_clean(); 

}








