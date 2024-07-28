<article class="post-single">
   <div class="post-info">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h6 class="upper"><span>By</span><a href="<?php the_author(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span><span class="dot"></span><?php the_tags(); ?></h6>
    </div>

   

    <div class="post-media">
                  <div class="media-audio">
                  <?php echo wp_oembed_get(get_post_meta( get_the_id(), '_audio', true)); ?>
                    
                  </div>
            </div>

     <?php if(!is_single()) : ?>
   
      <div class="post-body">
         <?php echo wp_trim_words(get_the_content(), '50', ''); ?>
          <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a>
           </p>
       </div>

     <?php else : ?>

     <div class="post-body">
         <?php the_content(); ?>
       </div>

     <?php endif; ?>
</article>




<!--

This formate will be used if we don't use any metabox. we have to create extra class to design the layout while using this this format. 

<article class="post-single">
   <div class="post-info">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h6 class="upper"><span>By</span><a href="<?php the_author(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span><span class="dot"></span><?php the_tags(); ?></h6>
    </div>
   
     <div class="post-body aaaaa">
         <?php the_content(); ?>
          <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a>
           </p>
       </div>
</article>


-->