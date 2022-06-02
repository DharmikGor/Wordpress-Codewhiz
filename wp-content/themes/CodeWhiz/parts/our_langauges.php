<?php 
if(!$block){
    return;
}
?>

<section class="our-langauges">
    <div class="container">
        <div class="row">
            <h2><?php echo $block['title'] ?></h2>
            <hr class="divider my-4">
        </div>
        <div class="row">
            <?php foreach ($block['langauges'] as $langauge): ?>
                <div class="col-md-2 col-sm-4 mb-3">
                    <img class="w-50" src="<?php echo $langauge['images']['url'] ?>">
                    <p class="pt-3"><?php echo $langauge['title'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>