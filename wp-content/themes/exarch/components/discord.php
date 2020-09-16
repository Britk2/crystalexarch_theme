<div class="discord_section">
    <img src="<?php echo get_template_directory_uri();?>/pics/discord_logo.svg" alt="Discord Logo">
    <div class="discord_link">
        <?php 
        $link = get_field('discord_link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
</div>