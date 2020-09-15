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
        <div class="recent_section">
        <h2> Recent </h2>
        <?php
            //query
            $args = [
            'post_type' => 'events',
            'post_status' => 'publish',
            'posts_per_page' => 3

            ];

            $the_query = new WP_Query ($args);
        ?>

        <?php if( $the_query->have_posts()):?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <section class="recent">
                <div class="recent_content">
                <h3><?php the_title(); ?></h3>
                <?php
                    $terms = get_the_terms( $post->ID , 'eventType' );
                    foreach ( $terms as $term ) {?>
                    <h4><?php the_date('M j, Y')?> | <?php echo $term->name;?></h4>
                <?php    
                    }
                ?>
                <p><?php the_excerpt();?></p>
                </div>
                <div class="recent_media">
                <?php the_post_thumbnail(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="wp-block-button__link">View News</a>
            </section>
            <?php endwhile; ?>

            <a href="<?php echo get_site_url();?>/news" target="_blank" class="wp-block-button__link btn_all">View All</a>

        <?php else: ?>

            <h2>No Recent Results</h2>

        <?php endif; ?>
        </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>