<?php 
    if(!$block){
        return;
    }
?>


<section class="features-area">
    <?php $counter_background_image = $block['background_image'];
    if($counter_background_image):?>
        <img src="<?php echo $counter_background_image['url']; ?>" alt="<?php echo $counter_background_image['alt']; ?>" srcset="">
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <?php foreach($block['counter_box'] as $block['counter_box']):?>
                <div class="col-lg-4">
                    <div class="counter-box">
                        <p class="counter"><span><?php echo $block['counter_box']['number']; ?></span> <?php echo $block['counter_box']['postfix_symbol']; ?></p>
                        <h6><?php echo $block['counter_box']['title']; ?></h6>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>