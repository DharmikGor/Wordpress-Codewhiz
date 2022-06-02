<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <?php
                $footer_logo= get_field('footer_logo', 'option');
                $logoUrl = $footer_logo ? $footer_logo['url'] : get_template_directory_uri().'/assets/images/Footer-logo.png'; ?>
                <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php bloginfo('name') ?>" style="max-width: 200px;">
                <p><?php the_field('description', 'option');?></p>
            </div>
            <div class="col-lg-4">
                <H3><?php the_field('footer_tittle', 'option');?></H3>
                <?php wp_nav_menu(
                        array(
                            'menu'                 => 'Footer Menu',
                            'container'            => 'div',
                            'container_class'      => 'footer-menu',
                            'container_id'         => '',
                            'menu_class'           => 'secondarymenu',
                            'before'               => '',
                            'after'                => '',
                            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        )
                    )
                ?>
            </div>
            <div class="col-lg-3">
                <?php echo get_field('contact_details', 'option');?>
            </div>
            <h5 class='copyrights'><?php echo do_shortcode(get_field('copyrights', 'option'));?></h5>
        </div>
    </div>
</section>
<?php wp_footer();?>
</body>
</html>