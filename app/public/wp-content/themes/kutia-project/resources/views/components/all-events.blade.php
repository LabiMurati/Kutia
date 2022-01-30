<section class="events">
   <div class="container">
       <h2><?php the_title(); ?></h2>
      <div class="events__holder">
      <?php
            $event = new WP_Query(array(
                'post_type' => 'event',
                'post_per_page' => -1,
                'author' => get_current_user_id()
            ));
            while($event->have_posts()){
                    $event->the_post(); ?>
                     <div class="events__info">
                     <img src="<?=get_field( 'event_img' );?>"> 
                       <h4><?php the_field('event_title'); ?></h4>
                       <span><?php the_field('event_date') ?></span>
                       <p><?php the_field('event_text') ?></p>
                    </div>
            <?php }
            ?>
      </div>
   </div>
</section>