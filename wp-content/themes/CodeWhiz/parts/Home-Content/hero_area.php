<?php 
if(!$block){
    return;
}
?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if($block['title']):?>
                    <h1 class="hero-title"><?php echo $block['title'];?></h1>
                <?php endif; ?>
                <?php if($block['button']):?>
                    <a href="#" class="hero-btn"><?php echo $block['button'];?></a>
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php                    
                    if( !empty($block['image'])):?>
                    <img src="<?php echo esc_url($block['image']['url']); ?>" alt="<?php echo esc_attr($block['image']['alt']); ?>" >
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>