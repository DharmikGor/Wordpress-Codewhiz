<?php
/**
* Template Name: Flexible Home
*/
    get_header();

    $blocks = get_field('blocks');
    //pre_print_pre($blocks);

    if(is_array($blocks) && count($blocks) > 0){
        foreach($blocks as $block){
           $blockFilePath = get_template_directory().'/parts/'.$block['acf_fc_layout'].'.php';
            if (file_exists($blockFilePath)) {   
                include $blockFilePath;
            }
        }
    }
    if(is_array($blocks) && count($blocks) > 0){
        foreach($blocks as $block){
           $blockFilePath = get_template_directory().'/parts/Home-Content/'.$block['acf_fc_layout'].'.php';
            if (file_exists($blockFilePath)) {   
                include $blockFilePath;
            }
        }
    }
?>

<?php get_footer();?>