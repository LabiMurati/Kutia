<article class="second-home"> 
  <div class="container">
<?php
         $news = new WP_Query(array(
             'post_type' => 'news',
             'posts_per_page' => 2,
         ));
         while($news->have_posts()){
                 $news->the_post(); ?>
      <div class="solceller">
         <div class="solceller__img">
         <img src="<?=get_field('news_img')?>"> 
         </div>
         <div class="solceller__info">
            <span><?php the_field('news_date') ?></span>
            <h4><?php the_field('news_title') ?></h4>
            <p><?php the_field('news_text') ?> </p>
         </div>
         </div>
      <?php }
         ?>
</div>

