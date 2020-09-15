<?php get_header();?>
<main class="main-content">
<div class="container">

    <h1 class="archive_title">
        <?php echo get_field('title_page');?>
    </h1>
    <!-- <h2 class="archive_tag">Archive</h1> -->

    <div class="archive_descript">
        <?php echo get_field('paragraph_page');?>
    </div>
    

    <div class="archive_post">
        <?php if(have_posts()):?>
            <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink();?>">
                        <h2><?php the_title();?></h2>
                        <p class="post_meta"><?php the_date('M j, Y')?><?php the_category();?></p>
                    </a>
                <article class="article_block">
                    <div class="archive_intro">
                        <div class="archive_media">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="archive_content">
                            <?php the_excerpt();?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else:?>
            <h2> No Post </h2>
        <?endif;?>
    </div>
    
</div>
</main>
<?php get_footer();?>