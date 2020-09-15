<?php
/*
 * Template Name: About 
 * 
 */
get_header();
?>

<main class="main-content news_page">
    <div class="container">
        <h1 class="about_title title"><?php the_title(); ?></h1>
        <h2><?php echo get_field('title_page');?></h2>
        <div class="about_content">
        <p><?php echo get_field('paragraph_page');?></p>
        </div>
    </div>
</main>

<?php
get_footer();
?>