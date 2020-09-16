
<div class="featured_section">
      <h2 class="sub_title"> Featured </h2>
      <?php $featured_posts = get_field('featured_events'); 
      if( $featured_posts ): ?>
          <?php foreach( $featured_posts as $featured_post ): 
            $permalink = get_permalink( $featured_post->ID );
            $title = get_the_title( $featured_post->ID );
            $excerpt = get_the_excerpt( $featured_post->ID );
            $image = get_the_post_thumbnail( $featured_post->ID );
            $custom_field = get_field( 'field_name', $featured_post->ID );
            $date = get_the_date('M j, Y', $featured_post ->ID);
            ?>
            <section class="featured">
              <div class="featured_content">
                <h4><?php echo $title; ?></h4>
                <h5><?php echo $date;?></h5>
                <p><?php echo $excerpt; ?></p>
              </div>
              <div class="featured_media">
                <?php echo $image; ?>
              </div>
              <a href="<?php echo $permalink; ?>" class="wp-block-button__link btn_single">View Event</a>
            </section>
          <?php endforeach; ?>
      <?php endif; ?>
      <a href="<?php echo get_site_url();?>/events" class="wp-block-button__link btn_all">View All</a>
    </div>