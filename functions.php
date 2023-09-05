<?php

function theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support');

function menus() {
    $locations = array(
        'primary' => "Desktop Primary Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
add_action('init', 'menus');

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

function add_menu_link_class($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function my_theme_setup() {

    $contact_page = get_page_by_title('Contact');

    if (!$contact_page) {
        $contact_page_data = array(
            'post_title' => 'Contact',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1,
            'post_slug' => 'contact',
        );

        $contact_page_id = wp_insert_post($contact_page_data);

        update_post_meta($contact_page_id, '_wp_page_template', 'page-contact.php');
    }

    $pricing_page = get_page_by_title('Pricing');

    if (!$pricing_page) {
        $pricing_page_data = array(
            'post_title' => 'Pricing',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1,
            'post_slug' => 'pricing',
        );

        $pricing_page_id = wp_insert_post($pricing_page_data);

        update_post_meta($pricing_page_id, '_wp_page_template', 'pricing.php');
    }

    $services_page = get_page_by_title( 'Services' );

    if (!$services_page) {
        $services_page_data = array(
            'post_title' => 'Services',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1,
            'post_slug' => 'services',
        );
    
        $services_page_id = wp_insert_post($services_page_data);
    
        update_post_meta($services_page_id, '_wp_page_template', 'services.php');
}
}
add_action('after_switch_theme', 'my_theme_setup');


function theme_customize_register( $wp_customize ) {

    // Priser - titel
    $wp_customize->add_section('priser_titel', array(
        'title'       => __('Priser: Titel', 'your_theme_name'),
        'priority'    => 30,
    ));

    $wp_customize->add_setting('custom_heading', array(
        'default'     => 'Default Heading',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('custom_heading', array(
        'label'       => __('Heading', 'your_theme_name'),
        'section'     => 'priser_titel',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('custom_description', array(
        'default'     => 'Default Description',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('custom_description', array(
        'label'       => __('Description', 'your_theme_name'),
        'section'     => 'priser_titel',
        'type'        => 'textarea',
    ));

    // Priser - Basic:
    $wp_customize->add_section('basic_bundle_section', array(
        'title'          => __('Basic Bundle', 'text-domain'),
        'priority'       => 30,
    ));

    $wp_customize->add_setting('basic_bundle_name', array(
        'default'       => 'Basic Bundle',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('basic_bundle_name', array(
        'label'         => __('Bundle Name', 'text-domain'),
        'section'       => 'basic_bundle_section',
        'type'          => 'text',
    ));

    $wp_customize->add_setting('basic_bundle_description', array(
        'default'       => 'Description',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('basic_bundle_description', array(
        'label'         => __('Bundle Description', 'text-domain'),
        'section'       => 'basic_bundle_section',
        'type'          => 'textarea',
    ));

    $wp_customize->add_setting('basic_bundle_price', array(
        'default'       => '$25',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('basic_bundle_price', array(
        'label'         => __('Bundle Price', 'text-domain'),
        'section'       => 'basic_bundle_section',
        'type'          => 'text',
    ));

    for($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("basic_bundle_list_item_$i", array(
            'default'       => '',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("basic_bundle_list_item_$i", array(
            'label'         => __("List Item $i", 'text-domain'),
            'section'       => 'basic_bundle_section',
            'type'          => 'text',
        ));
    }

    $wp_customize->add_setting('basic_bundle_button_text', array(
        'default'           => 'Button',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('basic_bundle_button_text', array(
        'label'    => 'Button Text',
        'section'  => 'basic_bundle_section',
        'type'     => 'text',
    ));



    // Priser - Pro:
        $wp_customize->add_section('pro_bundle_section', array(
            'title'       => __('Pro Bundle', 'your-text-domain'),
            'priority'    => 30,
        ));
    
        $wp_customize->add_setting('pro_bundle_heading', array(
            'default'           => 'Pro Bundle',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('pro_bundle_heading', array(
            'label'    => 'Pro Bundle Heading',
            'section'  => 'pro_bundle_section',
            'type'     => 'text',
        ));
    
        $wp_customize->add_setting('pro_bundle_subtitle', array(
            'default'           => 'Suscipit + donec',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('pro_bundle_subtitle', array(
            'label'    => 'Subtitle',
            'section'  => 'pro_bundle_section',
            'type'     => 'text',
        ));
    
        $wp_customize->add_setting('pro_bundle_price', array(
            'default'           => '$38',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('pro_bundle_price', array(
            'label'    => 'Price',
            'section'  => 'pro_bundle_section',
            'type'     => 'text',
        ));
    
        for ($i = 1; $i <= 5; $i++) {
            $wp_customize->add_setting("pro_bundle_item_{$i}", array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            ));
            $wp_customize->add_control("pro_bundle_item_{$i}", array(
                'label'    => 'List Item ' . $i,
                'section'  => 'pro_bundle_section',
                'type'     => 'text',
            ));
        }
    
        $wp_customize->add_setting('pro_bundle_button_text', array(
            'default'           => 'Button',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('pro_bundle_button_text', array(
            'label'    => 'Button Text',
            'section'  => 'pro_bundle_section',
            'type'     => 'text',
        ));

    // Ändra titel och subtitle i frontpage
    $wp_customize->add_section( 'home_title_section', array(
        'title' => 'Home Title',
        'priority' => 30,
    ));

    $wp_customize->add_setting( 'custom_p_text', array(
        'default' => 'Världens bästa tema!',
        'sanitize_callback' => 'wp_kses_post'
    ));

    $wp_customize->add_control( 'custom_p_text', array(
        'label' => 'Custom P Text',
        'section' => 'home_title_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting( 'custom_h1_text', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post'
    ));

    $wp_customize->add_control( 'custom_h1_text', array(
        'label' => 'Custom H1 Text',
        'section' => 'home_title_section',
        'type' => 'text',
    ));


    // Ändra knappen i menyn

    $wp_customize->add_section( 'cta_button_toggle', array(
        'title'       => __( 'Menyknappen', 'text_domain' ),
        'priority'    => 30,
        'description' => 'Toggle click-to-action Button',
    ));

    $wp_customize->add_setting( 'show_signup_button', array(
        'default'   => '1',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'show_signup_button', array(
        'label'    => __( 'Show Signup Button', 'text_domain' ),
        'section'  => 'cta_button_toggle',
        'settings' => 'show_signup_button',
        'type'     => 'checkbox',
    ));
    $wp_customize->add_setting('signup_button_text', array(
        'default' => 'Sign Up',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('signup_button_link', array(
        'default' => 'signup.html',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('signup_button_text', array(
        'label' => __('Button Text', 'text_domain'),
        'section' => 'cta_button_toggle',
        'settings' => 'signup_button_text',
        'type' => 'text',
    ));

    $wp_customize->add_control('signup_button_link', array(
        'label' => __('Button Link', 'text_domain'),
        'section' => 'cta_button_toggle',
        'settings' => 'signup_button_link',
        'type' => 'url',
    ));

    // Newsletter
    $wp_customize->add_section( 'newsletter', array(
        'title'       => __( 'News Letter', 'mytheme' ),
        'priority'    => 30,
    ));

    $wp_customize->add_setting( 'newsletter_title', array(
        'default' => 'Signa upp till vårt nyhetsbrev',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_setting( 'newsletter_description', array(
        'default' => 'Bla bla bla',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'newsletter_title', array(
        'label' => __( 'Newsletter Title', 'mytheme' ),
        'section' => 'newsletter',
        'type' => 'text',
    ));
    $wp_customize->add_control( 'newsletter_description', array(
        'label' => __( 'Newsletter Subtitle', 'mytheme' ),
        'section' => 'newsletter',
        'type' => 'text',
    ));

    // Front Page Banner
    $wp_customize->add_section('my_section', array(
        'title'    => __('Front-page banner', 'my_theme'),
        'priority' => 1,
    ));

    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("header_text_$i", array(
            'default'   => "Default header $i",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("header_text_$i", array(
            'label'    => "Header $i",
            'section'  => 'my_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("body_text_$i", array(
            'default'   => "Default body text $i",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("body_text_$i", array(
            'label'    => "Body Text $i",
            'section'  => 'my_section',
            'type'     => 'textarea',
        ));
    }

    // Testimonial Section
    $wp_customize->add_section('testimonial_section', array(
        'title'    => __('Front-Page Testimonials', 'my_theme'),
        'priority' => 2,
    ));

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("testimonial_text_$i", array(
            'default'   => "$i - Greatest company of all time! I love this company so much!",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("testimonial_text_$i", array(
            'label'    => "Testimonial Text $i",
            'section'  => 'testimonial_section',
            'type'     => 'textarea',
        ));

        $wp_customize->add_setting("testimonial_author_$i", array(
            'default'   => "Author $i",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("testimonial_author_$i", array(
            'label'    => "Author Name $i",
            'section'  => 'testimonial_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("testimonial_author_description_$i", array(
            'default'   => "Author description $i",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("testimonial_author_description_$i", array(
            'label'    => "Author Description $i",
            'section'  => 'testimonial_section',
            'type'     => 'text',
        ));
    }

    $wp_customize->add_setting('testimonial_title', array(
        'default'   => 'Vad folk säger om oss',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('testimonial_title', array(
        'label'    => __('Testimonial Title', 'my_theme'),
        'section'  => 'testimonial_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_subtitle', array(
        'default'   => 'Oavsett projekt, vi klarar det',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('testimonial_subtitle', array(
        'label'    => __('Testimonial Subtitle', 'my_theme'),
        'section'  => 'testimonial_section',
        'type'     => 'text',
    ));

    // Övrigt
    $wp_customize->add_section('ovrigt_section', array(
        'title'    => __('Front-Page Övrigt', 'my_theme'),
        'priority' => 3,
    ));

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("ovrigt_heading_$i", array(
            'default'   => "Default Heading $i",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("ovrigt_heading_$i", array(
            'label'    => "Övrigt Heading $i",
            'section'  => 'ovrigt_section',
            'type'     => 'text',
        ));

        $wp_customize->add_setting("ovrigt_subtext_$i", array(
            'default'   => "Default Subtext $i",
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("ovrigt_subtext_$i", array(
            'label'    => "Övrigt Subtext $i",
            'section'  => 'ovrigt_section',
            'type'     => 'text',
        ));
    }

        // Ändra tjänster
        $wp_customize->add_section('services_section', array(
            'title' => 'Tjänster',
            'priority' => 30,
        ));
        
        $wp_customize->add_setting('service_title_setting', array(
            'default' => 'Våra tjänster',
            'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control('service_title_setting', array(
            'label' => 'Service Title',
            'section' => 'services_section',
            'type' => 'text',
        ));
        
        $wp_customize->add_setting('header_text_setting', array(
            'default' => 'Vad vi kan erbjuda',
            'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control('header_text_setting', array(
            'label' => 'Header Text',
            'section' => 'services_section',
            'type' => 'text',
        ));
        
        for ($i = 1; $i <= 3; $i++) {
            $wp_customize->add_setting("header{$i}_text_setting", array(
                'default' => "Lorem ipsum dolor sit",
                'sanitize_callback' => 'wp_kses_post',
            ));
            $wp_customize->add_control("header{$i}_text_setting", array(
                'label' => "Header {$i} Text",
                'section' => 'services_section',
                'type' => 'text',
            ));
        

            $wp_customize->add_setting("paragraph{$i}_text_setting", array(
                'default' => 'Erat netus est hendrerit...',
                'sanitize_callback' => 'wp_kses_post',
            ));
            $wp_customize->add_control("paragraph{$i}_text_setting", array(
                'label' => "Paragraph {$i} Text",
                'section' => 'services_section',
                'type' => 'textarea',
            ));
        
  
            $wp_customize->add_setting("button{$i}_text_setting", array(
                'default' => 'Learn more',
                'sanitize_callback' => 'wp_kses_post',
            ));
            $wp_customize->add_control("button{$i}_text_setting", array(
                'label' => "Button {$i} Text",
                'section' => 'services_section',
                'type' => 'text',
            ));
        
            $wp_customize->add_setting("image{$i}_setting", array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "image{$i}_setting", array(
                'label' => "Upload Image {$i}",
                'section' => 'services_section',
                'settings' => "image{$i}_setting",
            )));
        }
}

add_action('customize_register', 'theme_customize_register');

function register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.0', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css', array('bootstrap-css'), $version, 'all');
}
add_action('wp_enqueue_scripts', 'register_styles');

function register_scripts() {
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array(), '5.2.2', true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/javascript/script.js', array(), '1', true);
}
add_action('wp_enqueue_scripts', 'register_scripts');

?>
