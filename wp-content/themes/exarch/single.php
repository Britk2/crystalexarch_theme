<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <!-- Main Content -->
        <h2 class="post_title"><?php the_title(); ?></h2>
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
        <div class="page-builder">
            <?php the_content(); ?>
        </div>
        <?php the_tags();?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer();?>


