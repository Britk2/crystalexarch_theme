<div class="featured_section">
      <h2> Featured </h2>
      <?php $featured_posts = get_field('featured_event'); 
      if( $featured_posts ): ?>
          <?php foreach( $featured_posts as $featured_post ): 
            $permalink = get_permalink( $featured_post->ID );
            $title = get_the_title( $featured_post->ID );
            $excerpt = get_the_excerpt( $featured_post->ID );
            $image = get_the_post_thumbnail( $featured_post->ID );
            $custom_field = get_field( 'field_name', $featured_post->ID );
            ?>
            <section class="featured">
              <div class="featured_media">
                <?php echo $image; ?>
              </div>
              <div class="featured_content">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $excerpt; ?></p>
                <a href="<?php echo $permalink; ?>" class="wp-block-button__link">View Event</a>
              </div>
            </section>
          <?php endforeach; ?>
      <?php endif; ?>
      <?php $cta = get_field('all_events');?>
      <a href="<?php echo $cta['url']?>" target="<?php echo $cta['target']?>" class="wp-block-button__link">View All</a>
    </div>
