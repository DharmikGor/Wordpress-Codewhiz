<?php get_header(); ?>

<section class="error">
        <div class="container">
                <div class="row">
                        <h1 ><?php echo get_field('error_number', 'option'); ?></h1>
                        <h2><?php echo get_field('error_title', 'option'); ?></h2>
                        <p><?php echo get_field('error_description', 'option'); ?></p>        
                </div>
        </div>
</section>

<?php get_footer(); ?>
