<?php 
if(!$block){
    return;
}
?>
<section class="contact">
    <div class="container">
        <div class="row">
            <h2><?php echo $block['heading'] ?></h2>
            <p><?php echo $block['description'] ?></p>
        </div>
        <div class="row">
            <div class="contact-form">
                <?php echo do_shortcode($block['form']); ?>
            </div>
        </div>

    </div>
    
</section>