<?php 
    if(!$block){
        return;
    }

?>
<section class="blog-content">
    <div class="container">
        <div class="blog-image">
            <img src="<?php echo $block['image']['url']; ?>" alt="" srcset="">
        </div>
        <div class="content">
            <h2 class="title"><a href="<?php the_permalink();?>"><?php echo $block['heading']; ?></a></h2>
            <?php echo $block['description']; ?>
        </div>
    </div>
</section>
