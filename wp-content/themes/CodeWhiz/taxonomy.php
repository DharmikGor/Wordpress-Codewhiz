Taxonomy.php
<?php get_header(); ?>

<?php  if( have_posts()) : while( have_posts() ) : the_post(); 
$carId = get_the_ID();?>
    <div class="container">
        <div class="row blog-box">
            <h1 style="text-align: center;"><?php the_title(); ?></h1>
            <div class="description">
                <?php echo get_field('content', $carId); ?>
            </div>
            
            <a href="<?php the_permalink();?>" class="btn btn-success" style="text-align: center;">Read More</a>
        </div>
    </div>
<?php endwhile; endif; ?>
<div class="pagination">
    <?php echo paginate_links(); ?>
</div> 
    

<?php get_footer(); ?>