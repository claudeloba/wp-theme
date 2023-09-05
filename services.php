<?php
get_header();
?>
<section class="py-5">
    <div class="container py-5">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2"><?php echo get_theme_mod('service_title_setting', 'Våra tjänster'); ?></p>
                <h3 class="fw-bold"><?php echo get_theme_mod('header_text_setting', 'Vad vi kan erbjuda'); ?></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
            <div class="col mb-5">
                <img class="rounded img-fluid shadow" src="<?php echo get_theme_mod('image1_setting', get_template_directory_uri() . '/assets/img/products/1.jpg'); ?>">
            </div>
            <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                <div>
                    <h5 class="fw-bold"><?php echo get_theme_mod('header2_text_setting', 'Lorem ipsum dolor sit'); ?></h5>
                    <p class="text-muted mb-4"><?php echo get_theme_mod('paragraph1_text_setting', 'Erat netus est hendrerit...'); ?></p>
                    <button class="btn btn-primary shadow" type="button"><?php echo get_theme_mod('button1_text_setting', 'Learn more'); ?></button>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
            <div class="col order-md-last mb-5">
                <img class="rounded img-fluid shadow" src="<?php echo get_theme_mod('image2_setting', get_template_directory_uri() . '/assets/img/products/2.jpg'); ?>">
            </div>
            <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                <div>
                    <h5 class="fw-bold"><?php echo get_theme_mod('header3_text_setting', 'Lorem ipsum dolor sit'); ?></h5>
                    <p class="text-muted mb-4"><?php echo get_theme_mod('paragraph2_text_setting', 'Erat netus est hendrerit...'); ?></p>
                    <button class="btn btn-primary shadow" type="button"><?php echo get_theme_mod('button2_text_setting', 'Learn more'); ?></button>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
            <div class="col mb-5">
                <img class="rounded img-fluid shadow" src="<?php echo get_theme_mod('image3_setting', get_template_directory_uri() . '/assets/img/products/3.jpg'); ?>">
            </div>
            <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                <div>
                    <h5 class="fw-bold"><?php echo get_theme_mod('header4_text_setting', 'Lorem ipsum dolor sit'); ?></h5>
                    <p class="text-muted mb-4"><?php echo get_theme_mod('paragraph3_text_setting', 'Erat netus est hendrerit...'); ?></p>
                    <button class="btn btn-primary shadow" type="button"><?php echo get_theme_mod('button3_text_setting', 'Learn more'); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
