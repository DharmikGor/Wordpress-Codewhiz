<?php 
    if(!$block){
        return;
    }

$customers = $block['testimonials'];
?>

<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 t-title">
                <h2><?php echo $block['title'];?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 text-center">
                <?php if($customers && count($customers)>0): ?>
                    <div class="owl-carousel ">
                        <?php foreach($customers as $customer): ?>
                            <div class="single-c-item">
                                <?php $testimonial_image = $customer['profile_image']; ?>
                                <img src="<?php echo $testimonial_image['url']; ?>" alt="<?php echo $testimonial_image['alt']; ?>" srcset="">
                                <h3><?php echo $customer['name']; ?></h3>
                                <h5><?php echo $customer['reviews']; ?></h5>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="t-img">
        <?php foreach($block['peoples'] as $block['peoples']):
            $testimonial_people = $block['peoples'];?>
            <img src="<?php echo $testimonial_people['images']['url']; ?>" alt="" srcset="">
        <?php endforeach; ?>
    </div>
</section>