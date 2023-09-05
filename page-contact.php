<?php
/* Template Name: Contact Page */

$email = get_option('admin_email');
$phone = get_theme_mod('phone_setting');
$address = get_theme_mod('address_setting');

get_header(); ?>

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

<?php get_footer(); ?>
