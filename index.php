<?php get_header() ?>
    <div class="container">
        <?php
        $data = include get_template_directory() . '/data/products.php';
        foreach ($data as $item) {
            ?>
        <div class="card">
            <div class="card_title"><?php echo esc_html($item['title']); ?></div>
            <div class="card_image">
                <img class="responsive-image" src="<?php echo esc_url($item['image']); ?>"
                    alt="<?php echo esc_attr($item['title']); ?>" />
            </div>
            <div class="card_price">
                <div>Chair</div>
                <div><?php echo esc_html($item['price']); ?></div>
            </div>
        </div>
        <?php
        }?>
    </div>

<?php get_footer() ?>

    