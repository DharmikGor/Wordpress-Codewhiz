<?php 
    if(!$block){
        return;
    }
    pre_print_pre($block['image']);
?>
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <?php $contact_image= $block['image'];?>
            <?Php if($contact_image):?>
                <img src="<?php echo $contact_image['url']; ?>" alt="<?php echo $contact_image['title']; ?>" srcset="">
            <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <h2><?php echo $block['title']; ?></h2>
                <h5><?php echo $block['description']; ?></h5>
                <div class="contact-form">
                    <?php echo do_shortcode($block['contact_form_shortcode']); ?>
                </div>
            </div>
        </div>
    </div>
</section>