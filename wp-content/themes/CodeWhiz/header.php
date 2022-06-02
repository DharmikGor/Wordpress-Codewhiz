<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php the_field('favicon_logo', 'option') ?>" type="image/png">
        
        <link rel="icon" type="image/png" href="/themes/CodeWhiz/assets/images/f_con.png">
        <?php wp_head(); ?>
    </head>
<body  <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <section class="navbar">
        <div class="container-fluid">
            <div class="col-lg-4 header-logo">
                <?php
                $logo= get_field('header_logo', 'option');
                $logoUrl = $logo ? $logo['url'] : get_template_directory_uri().'/assets/images/Header-logo.svg'; ?>
                <a href="<?php echo home_url();?>"><img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name') ?>" style="max-width: 200px;"></a>
            </div>
            <div class="col-lg-8 navmenu">
                    <?php
                        wp_nav_menu( 
                            array(
                                'menu'                 => 'Header Menu',
                                'container'            => 'div',
                                'container_class'      => 'header-menu',
                                'container_id'         => '',
                                'menu_class'           => 'mainmenu',
                                'before'               => '',
                                'after'                => '',
                                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            )
                        );
                    ?>
                    
            </div>
        </div>
    </section>

