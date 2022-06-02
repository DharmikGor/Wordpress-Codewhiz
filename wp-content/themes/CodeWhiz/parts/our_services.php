<?php 
if(!$block){
    return;
}
?>
<section class="our-services">
    <div class="container">
        <div class="heading">
            <h1><?php echo $block['heading']; ?></h1>
            <p><?php echo $block['subtitle'];?></p>
        </div>
        <div class="row">
            <?php $coutner = 1;
                foreach($block['service_list'] as $service ):  ?>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-2">
                                <h3><?php echo $coutner ?></h3>
                            </div>
                            <div class="col-lg-10">
                                <h3><?php echo $service['title'] ?></h3>
                                <p class="term-desc"><?php echo $service['description'] ?></p>
                            </div>
                        </div>
                    </div>
            <?php $coutner++;
                endforeach; ?>
        </div>
    </div>
</section>