<?php 
if(!$block){
    return;
}
$brandTermId = $block['brand'];
?>

<?php 
 
$carsQuery = new WP_Query(
    array(
        'post_type' => 'car',
        'posts_per_page' => 25,
        'orderby'   => 'date',
        'order'     => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'Brand',
                'field'    => 'id',
                'terms'    => $brandTermId,
                'compare'  => '=',
            ),
        ),
    )
); 
?>
<?php if(!$carsQuery->have_posts()){
    return;
}
?>
<div class="container brand">
    <div class="row">
        <div class="col-lg-8">
            <div class="owl-carousel brand-carousel">
                <?php while($carsQuery -> have_posts()) : ?>
                    <?php $carsQuery ->  the_post(); ?>
                    <div class="single-c-item brand-single-item ">  
                        <div class="brand-image">
                            <img src="<?php echo get_field('image')['url'] ?>" alt="" srcset="">
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <div class="description">
                            <?php echo get_field('description'); ?>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata() ?>
            </div>
        </div>
    </div>
    
</div>


    










