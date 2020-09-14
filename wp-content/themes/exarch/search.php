<?php
get_header();
?>

<?php
get_header();?>

<!-- Search -->
<section class="search_section">
    <form action="/" method="get">
      <!-- <label for="searchField">Search</label> -->
      <input type="text" name="s" id="searchField" value="<?php the_search_query(); ?>" placeholder="Search.." >
      <select name="post_type" id="search_select">
        <option value="" <?php echo $_GET['post_type'] == '' ? 'selected' : ''; ?>>All</option>
        <option value="events" <?php echo $_GET['post_type'] == 'events' ? 'selected' : ''; ?>>Events</option>
        <option value="post" <?php echo $_GET['post_type'] == 'post' ? 'selected' : ''; ?>>Posts</option>
      </select>
      <input type="submit" value="Search" id="search_submit">
    </form>
  </section>

<main class="search_page">
  <!-- Results -->
  <section class="search_results">
    <?php if(have_posts()):?>
        <?php while (have_posts()) : the_post(); ?>
          <?php if(has_post_thumbnail()):?>
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
          <?php endif; ?>
        <?php endwhile; ?>
    <?php else: ?>
      <h2>Sorry, there are no results</h2>
    <?php endif; ?>
  </section>

</main>
<?php get_footer(); ?>


<?php
get_footer();
?>