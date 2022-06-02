<?php 

/* Template Name: Blog Page */

?>


page-blog.php
<?php get_header(); ?>
<?php 
 
$carsQuery = new WP_Query(
    array(
        'post_type' => 'car',
        'posts_per_page' => 2,
        'orderby'   => 'date',
        'order'     => 'ASC',
    )
); 
// pre_print_pre($carsQuery);
?>

    
<div class="container">
    <div class="row" id = "paginations" >
        <?php if( $carsQuery-> have_posts() ): ?>
            <?php while( $carsQuery->have_posts() ): $carsQuery->the_post(); ?>
                
                    <div class="col-md-6">
                        <div class="card-block blog-box">
                            <div class="row card-border">
                                <div class="col-lg-12">
                                    <div class="card-image">
                                        <?php $image= get_field('image'); ?>
                                        <a href="<?php the_permalink();?>"><img src="<?php echo $image['url'] ?>"></a>
                                    </div>
                                    <h4 class="card-title"><a href="<?php the_permalink();?>"><?php echo get_field('title')?></a></h4>
                                    <div class="card-description"><?php echo get_field('content') ?></div>
                                </div>
                                <div class="row author-meta">
                                    <div class="col-sm-2">
                                        <?php echo get_avatar( get_the_author_meta( 'ID' ), $size = '60'); ?>
                                    </div>
                                    <div class="col-sm-9">
                                        <a href="<?php the_permalink();?>"><?php echo get_the_author(); ?></a><br>
                                        <?php echo  get_the_date( 'F j, Y' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile; ?>
            <!-- <div class="pagination">
                <?php echo paginate_links(array('total' => $carsQuery -> max_num_pages)); ?>
            </div>  -->
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col load-more" >
            <input type="hidden" id = "page_number" value = 1>
            <input type="hidden" id = "post_per_page" value = 2>
            <button id = 'load_more_cars'> Lode More</button>
        </div>
    </div>
</div>

<?php get_footer();?>