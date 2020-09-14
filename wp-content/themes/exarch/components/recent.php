<div class="recent_section">
      <h2> Recent </h2>
      <?php
        //query
        $args = [
          'post_type' => 'projects',
          'post_status' => 'publish',
          'posts_per_page' => 3

        ];

        $the_query = new WP_Query ($args);
      ?>

      <?php if( $the_query->have_posts()):?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <section class="recent">
            <div class="recent_media">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="recent_content">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt();?></p>
              <a href="<?php the_permalink(); ?>" class="wp-block-button__link">View Project</a>
            </div>
          </section>
        <?php endwhile; ?>

        <a href="<?php echo get_site_url();?>/events" target="_blank" class="wp-block-button__link">View All</a>

      <?php else: ?>

        <h2>No Recent Results</h2>

      <?php endif; ?>
    </div>