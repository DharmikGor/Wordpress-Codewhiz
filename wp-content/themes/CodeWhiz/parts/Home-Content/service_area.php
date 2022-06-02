<?php 
if(!$block){
    return;
}
$servicesList = $block['service_box']
?>


<section class="service-area">
        <div class="container-fluid">
            <div class="container">
                <div class="row service-title">
                    <div class="col-lg-6">
                    <?php if($block['small_title']):?>
                            <h5><?php echo $block['small_title'];?></h1>
                        <?php endif; ?>
                        <?php if($block['title']):?>
                            <h2><?php echo $block['title'];?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="row service-details">
                        <?php if($servicesList && count($servicesList)>0): 
                            foreach($servicesList as $service){ ?>
                                <div class="col-lg-4">
                                    <div class="service-item">
                                        <?php $service_images = $service['image']; ?>
                                        <img src="<?php echo $service_images['url']; ?>" alt="<?php echo $service_images['alt']; ?>" srcset="">
                                        <h3><?php echo $service['title']; ?></h3>
                                        <p><?php echo $service['description']; ?></p>
                                    </div>
                                </div>
                          <?php  }
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>