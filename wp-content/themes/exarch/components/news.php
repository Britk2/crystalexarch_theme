<?php
/*
 * Template Name: News
 * 
 */
get_header();
?>

<main class="main-content news_page">
    <div class="container">
      <h1 class="news_title title"><?php the_title(); ?></h1>
      <h2><?php echo get_field('title_page');?></h2>
      <div class="news_content">
        <p><?php echo get_field('paragraph_page');?></p>
      </div>
      <?php get_template_part('components/recent-news');?>
    </div>
</main>

<?php
get_footer();
?>