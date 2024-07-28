<article class="post-single">
   <div class="post-info">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h6 class="upper"><span>By</span><a href="<?php the_author(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span><span class="dot"></span><?php the_tags(); ?></h6>
    </div>

        

                <div class="post-media">
                  
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
                <div class="post-media">
                  
               <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
                    <ul class="slides">
                      <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/1.jpg" alt="">
                      </li>
                      <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2.jpg" alt="">
                      </li>
                      <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/3.jpg" alt="">
                      </li>
                    </ul>
                  </div>
              
                </div>

 <div class="post-body stand">
         <?php the_content(); ?>
          <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a>
           </p>
       </div>
</article>

-->