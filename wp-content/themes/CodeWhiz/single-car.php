<?php get_header(); ?>


<section class="blog-content">
    <div class="container">
        <div class="blog-image">
            <img src="<?php echo get_field('image')['url']; ?>" alt="" srcset="">
        </div>
        <div class="content">
            <h2 class="title"><a href="<?php the_permalink();?>"><?php echo get_field('title'); ?></a></h2>
            <?php echo get_field('content'); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>