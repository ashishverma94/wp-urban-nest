<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title> <?php echo get_bloginfo("name"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style/grid.css" />
    <?php wp_head(); ?>
</head>

<?php 
    $banner = get_field('banner_section') ;
    if ( $banner ){
?>

<body <?php body_class(); ?>>
    <header>
        <h1 class="font-bold text-[25px] text-[gray]"><?php echo $banner['primary_title'] ?></h1>

    </header>
    <!-- <div class=" banner_class">
        <div class="banner_class_text text-[20px]"> <?php echo $banner['secondary_title'] ?></div>
        <div class="banner_class_image"><img src="<?php echo $banner['image'] ?>" alt="banner-image" /></div>
    </div> -->

    <?php } ?>