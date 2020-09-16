<?php
/*
 * Template Name: About 
 * 
 */
get_header();
?>

<main class="main-content about_page">
    <div class="container">
        <div class="about_intro">
            <h1 class="about_title title"><?php the_title(); ?></h1>
            <h2><?php echo get_field('title_page');?></h2>
            <div class="about_content">
                <p><?php echo get_field('paragraph_page');?></p>
            </div>
        </div>

        <?php while (have_posts()) : the_post(); ?>
            <div class="about_container container">
                <!-- Main Content -->
                <div class="page-builder">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>

        <?php get_template_part('components/discord');?>
    </div>
</main>

<?php
get_footer();
?>