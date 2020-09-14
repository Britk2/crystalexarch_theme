<?php get_header();?>

<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <h1 class="post_title"><?php the_title(); ?></h1>
      <?php the_post_thumbnail(); ?>
      <div class="page-builder">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>