<?php
get_header();
?>

<main class="main-content">
  <div class="container">
    <div class="intro_home">
      <h2 class="title"><?php echo get_field('title_page');?></h2>
      <div class="home_content">
        <p><?php echo get_field('paragraph_page');?></p>
      </div>
    </div>
    <?php get_template_part('components/featured');?>
    <?php get_template_part('components/discord');?>
  </div>
</main>

<?php
get_footer();
?>



