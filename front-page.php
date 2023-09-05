<?php
$email = get_option('admin_email');
$phone = get_theme_mod('phone_setting');
$address = get_theme_mod('address_setting');
get_header();
?>
<header class="bg-primary-gradient">
<div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
            <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                    
            <div class="text-center">
    <p class="fw-bold text-success mb-2"><?php echo get_theme_mod( 'custom_p_text', 'Världens bästa tema!' ); ?></p>
    <h1 class="fw-bold"><?php echo get_theme_mod( 'custom_h1_text', 'Title' ); ?></h1>

</div>
    </div>
                <div class="col-12 col-lg-10 mx-auto">
    <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);">
            <img class="img-fluid rounded" data-bss-parallax="" data-bss-parallax-speed="0.8" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/4.jpeg">
        </div>
        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);">
            <img class="img-fluid rounded" data-bss-parallax="" data-bss-parallax-speed="0.4" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/5.webp">
        </div>
        <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);">
            <img class="img-fluid w-50 rounded" data-bss-parallax="" data-bss-parallax-speed="0.25" src="<?php echo get_template_directory_uri(); ?>/assets/img/products/6.webp">
        </div>
    </div>
</div>

            </div>
        </div>
    </header>
<section class="py-5">
    <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                the_content(); 
            }
        }
    ?>
</section>


    <section>
    <div class="container bg-primary-gradient py-5">
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2"><?php echo get_theme_mod('section_header', 'Default Section Header'); ?></p>
                <h3 class="fw-bold"><?php echo get_theme_mod('section_subheader', 'Default Section Subheader'); ?></h3>
            </div>
        </div>
        <div class="py-5 p-lg-5">
        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
    <?php for ($i = 1; $i <= 4; $i++): ?>
        <div class="col mb-5">
            <div class="card shadow-sm">
                <div class="card-body px-4 py-5 px-md-5">
                    <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"></div>
                    <h5 class="fw-bold card-title"><?php echo get_theme_mod("header_text_$i", "Default header $i"); ?></h5>
                    <p class="text-muted card-text mb-4"><?php echo get_theme_mod("body_text_$i", "Default body text $i"); ?></p>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <div class="mx-auto" style="max-width: 900px;">
            <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center">
                <?php 
                    $bg_classes = ['bg-primary-light', 'bg-secondary-light', 'bg-info-light'  ];
                    $btn_classes = array('btn-primary', 'btn-secondary', 'btn-info');
                    for ($i = 1; $i <= 3; $i++): 
                ?>
                    <div class="col mb-4">
                        <div class="card <?php echo $bg_classes[$i-1]; ?>">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-primary card-text mb-2"><?php echo get_theme_mod("ovrigt_heading_$i", "Default Heading $i"); ?></p>
                                <h5 class="fw-bold card-title mb-3"><?php echo get_theme_mod("ovrigt_subtext_$i", "Default Subtext $i"); ?></h5>
                                <button class="btn <?php echo $btn_classes[($i-1) % count($btn_classes)]; ?> btn-sm" type="button">Läs mer</button>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Testimonials</p>
                    <h2 class="fw-bold"><strong><?php echo get_theme_mod('testimonial_title', 'Vad folk säger om oss'); ?></strong></h2>
<p class="text-muted"><?php echo get_theme_mod('testimonial_subtitle', 'Oavsett projekt, vi klarar det'); ?></p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
    <?php for ($i = 1; $i <= 3; $i++): ?>
        <div class="col mb-4">
            <div class="d-flex flex-column align-items-center align-items-sm-start">
                <p class="bg-light border rounded border-light p-4"><?php echo get_theme_mod("testimonial_text_$i", "Default testimonial text $i"); ?></p>
                <div class="d-flex">
                    <div>
                        <p class="fw-bold text-primary mb-0"><?php echo get_theme_mod("testimonial_author_$i", "Author $i"); ?></p>
                        <p class="text-muted mb-0"><?php echo get_theme_mod("testimonial_author_description_$i", "Author description $i"); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
            </div>
        </div>
    </section>
    <section class="py-5">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">Kontakt</p>
                <h2 class="fw-bold">Hör av dig vid frågor</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div>
                    <form class="p-3 p-xl-4" method="post">
                        <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div>
                        <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                        <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                        <div><button class="btn btn-primary shadow d-block w-100" type="submit">Send </button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
                <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
                    <div class="d-flex align-items-center p-3">
                        <!-- ... -->
                        <div class="px-2">
                            <h6 class="fw-bold mb-0">Telefon</h6>
                            <p class="text-muted mb-0"><?php echo esc_html($phone ?? '+123456789'); ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3">
                        <!-- ... -->
                        <div class="px-2">
                            <h6 class="fw-bold mb-0">Email</h6>
                            <p class="text-muted mb-0"><?php echo esc_html($email ?? 'info@example.com'); ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3">
                        <!-- ... -->
                        <div class="px-2">
                            <h6 class="fw-bold mb-0">Adress</h6>
                            <p class="text-muted mb-0"><?php echo esc_html($address ?? '12 Example Street'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>