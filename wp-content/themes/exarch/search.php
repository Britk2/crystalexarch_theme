<?php
get_header();
?>

<!-- Search -->
<main class="search_page main-content">
  <!-- Results -->
  <div class="container">
  <section class="search_results">
    <?php if(have_posts()):?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="article_block">
              <a href="<?php the_permalink();?>">
                <h2><?php the_title();?></h2>
              </a>
              <div class="archive_intro">
                <div class="archive_media">
                    <?php the_post_thumbnail();?>
                </div>
                <?php the_excerpt();?>
              </div>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
      <h2>Sorry, there are no results</h2>
    <?php endif; ?>
  </section>
  </div>

</main>

<?php
get_footer();
?>