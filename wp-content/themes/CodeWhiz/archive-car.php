archive-car.php

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ): the_post();
                $carId = get_the_ID();?>
                
                    <div class="col-md-6">
                        <div class="card-block blog-box">
                            <div class="row card-border">
                                <div class="col-lg-12">
                                    <div class="card-image">
                                        <?php $image= get_field('image'); ?>
                                        <a href="<?php the_permalink();?>"><img src="<?php echo $image['url'] ?>"></a>
                                    </div>
                                    <h4 class="card-title"><a href="<?php the_permalink();?>"><?php echo get_field('title')?></a></h4>
                                    <div class="card-description"><?php echo get_field('content', $carId) ?></div>
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
            <div class="pagination">
                <?php echo paginate_links(); ?>
                
                <?php // previous_posts_link(); ?>
                <?php // next_posts_link(); ?>
            </div> 
        <?php endif; ?>
    </div>
</div>

<?php get_footer();?>