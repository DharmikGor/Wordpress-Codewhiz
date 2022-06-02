<?php 
    if(!$block){
        return;
    }
    $processList = $block['process_list'];
?>


<section class="understand-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1><?php echo $block['title'];?></h1>
                <p><?php echo $block['description'];?></p>
                <a href="#"><?php echo $block['button'];?></a>
            </div>
            <div class="col-lg-4">
                <?php $understand_image = $block['image']; ?>
                <img src="<?php echo $understand_image['url']; ?>" alt="<?php echo $understand_images['alt']; ?>" srcset="">
            </div>
            <div class="col-lg-4">
                <h2><?php echo $block['process_heading'];?></h2>
                <?php if($processList && count($processList)>0 ): ?>
                    <ol>
                        <?php foreach($processList as $step){ ?>
                            
                                <li><?php echo $step['process']; ?></li>
                        <?php } ?>
                    </ol>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>