<div class="recent_section">
      <h2 class="sub_title"> Recent </h2>
      <?php
        //query
        $args = [
          'post_type' => array('events', 'news'),
          'post_status' => 'publish',
          'posts_per_page' => 3
        ];

        $the_query = new WP_Query ($args);
      ?>

      <?php if( $the_query->have_posts()):?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <section class="recent">
            <div class="recent_content">
              <h4><?php the_title(); ?></h4>
              <?php if(get_the_terms( $post->ID , 'eventType' )):
                $terms = get_the_terms( $post->ID , 'eventType' );
                foreach ( $terms as $term ) {?>
                  <h4><?php the_date('M j, Y')?> | <?php echo $term->name;?></h4>
              <?php    
                }
              ?>
          <?php elseif(get_the_terms( $post->ID , 'newsType' )):
                $terms = get_the_terms( $post->ID , 'newsType' );
                foreach ( $terms as $term ) {?>
                  <h4><?php the_date('M j, Y')?> | <?php echo $term->name;?></h4>
              <?php    
                } endif;
              ?>
              <p><?php the_excerpt();?></p>
            </div>
            <div class="recent_media">
              <?php the_post_thumbnail(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="wp-block-button__link btn_single">View</a>
          </section>
        <?php endwhile; ?>
      <?php else: ?>

        <h2>No Recent Results</h2>

      <?php endif; ?>
    </div>