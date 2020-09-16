<?php
/*
 * Template Name: Event
 * 
 */
get_header();
?>

<main class="main-content events_page">
    <div class="container">
        <h1 class="events_title title"><?php the_title(); ?></h1>
        <h2><?php echo get_field('title_page');?></h2>
        <div class="events_content">
            <p><?php echo get_field('paragraph_page');?></p>
        </div>
        <?php get_template_part('components/featured');?>
        <?php get_template_part('components/recent-event');?>
    </div>
</main>

<?php
get_footer();
?>