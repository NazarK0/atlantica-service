<?php

 $blog_related_post = konstruksy_option('blog_related_post','no'); 
 $blog_related_post_number = konstruksy_option('blog_related_post_number',3); 

?>
<?php if($blog_related_post=="yes"): ?>
   <?php 
      $related_post = konstruksy_related_posts_by_tags($post->ID,$blog_related_post_number); 
      
      if( $related_post->have_posts() ) {
         while ($related_post->have_posts()) : $related_post->the_post(); ?>
    
      <div class="related-post-box solid-bg">
         <div class="related-post-img">
            <img class="related-post-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" <?php the_title_attribute(); ?> ">
         </div>
         <div class="related-post-info">
            <p class="related-post-date"><?php echo get_the_date();  ?></p>
            <h5 class="related-post-tittle"><a href="<?php echo get_the_title('post_url'); ?>"><?php the_title(); ?></a></h5>
         </div>
      </div>
   
   <?php
     endwhile;
   }
    wp_reset_postdata();
  
  ?>
<?php endif; ?>
