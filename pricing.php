<?php
/**
 * Template Name: Pricing
 */

get_header(); ?>

<section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
    <h2 class="fw-bold">
        <?php echo get_theme_mod('custom_heading', 'Default Heading'); ?>
    </h2>
    <p class="text-muted">
        <?php echo get_theme_mod('custom_description', 'Default Description'); ?>
    </p>
</div>
            </div>
            <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 d-flex align-items-md-center align-items-xl-center">
                <div class="col offset-xl-2 mb-4">
                    <div class="card bg-light border-light">
                    <div class="card-body p-4">
    <div class="d-flex justify-content-between">
        <div>
            <h3 class="fw-bold mb-0">
                <?php echo get_theme_mod('basic_bundle_name', 'Basic Bundle'); ?>
            </h3>
            <p>
                <?php echo get_theme_mod('basic_bundle_description', 'Suscipit'); ?>
            </p>
            <h4 class="display-4 fw-bold">
                <?php echo get_theme_mod('basic_bundle_price', '$25'); ?>
            </h4>
        </div>
    </div>
    <div>
        <ul class="list-unstyled">
            <?php for($i = 1; $i <= 3; $i++): ?>
                <li class="d-flex mb-2">
                    <span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                        </svg>
                    </span>
                    <span>
                        <?php echo get_theme_mod("basic_bundle_list_item_$i", "Default List Item $i"); ?>
                    </span>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
    <button class="btn btn-primary d-block w-100" type="button"><?php echo get_theme_mod('basic_bundle_button_text'); ?></button>
</div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between">
                                <div>
                                <h3 class="fw-bold text-white mb-0"><?php echo get_theme_mod('pro_bundle_heading'); ?></h3>
    <p><?php echo get_theme_mod('pro_bundle_subtitle'); ?></p>
    <h4 class="display-4 fw-bold text-white"><?php echo get_theme_mod('pro_bundle_price'); ?></h4>
    <div>
        <ul class="list-unstyled">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <li class="d-flex mb-2">
                    <span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                        </svg>
                    </span>
                    <span><?php echo get_theme_mod("pro_bundle_item_{$i}"); ?></span>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
    <button class="btn btn-primary d-block w-100 bg-semi-white" type="button"><?php echo get_theme_mod('pro_bundle_button_text'); ?></button>
</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
