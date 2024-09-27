<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href = "<?php echo get_template_directory_uri(); ?>/style/grid.css"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <?php
        $data = include get_template_directory() . '/data/products.php';
        foreach ($data as $item) {
            ?>
            <div class="card">
                <div class="card_title"><?php echo esc_html($item['title']); ?></div>
                <div class="card_image"> 
                    <img 
                      class="responsive-image" 
                      src="<?php echo esc_url($item['image']); ?>" 
                      alt="<?php echo esc_attr($item['title']); ?>" 
                    />
                </div>
                <div class="card_price">
                    <div>Chair</div>
                    <div><?php echo esc_html($item['price']); ?></div>
                </div>
            </div>
            <?php
        }?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
