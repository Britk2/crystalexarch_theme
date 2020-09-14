<?php
get_header();
?>

<main class="main-content">
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
          <div class="intro_home">
            <?php if(get_field('title')):?>
              <h1 class="home_title"><?php echo get_field('title')?></h1>
            <?php endif;?>
            <p class="home_p">
              <?php if(get_field('intro_paragraph')):?>
                <?php echo get_field('intro_paragraph')?>
              <?php endif;?>
            </p>
          </div>

          <?php get_template_part('components/featured');?>
          <?php get_template_part('components/recent');?>
        </div>

        <?php get_sidebar(); ?>

    </div>
</main>

<?php
get_footer();
?>



