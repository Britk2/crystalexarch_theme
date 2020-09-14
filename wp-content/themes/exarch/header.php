<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> <?php wp_title('|', true, 'left');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header class="header">
  <div class="container header_content">
    <a href="<?php echo get_site_url();?>"><img class="header__logo" src="<?php echo get_site_icon_url();?>" alt="This is the logo">
    </a>
    <div class="menu">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary_menu'
        ]);
      ?>
    </div>
  </div>
</header>