<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <?php
    wp_head();
    ?>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/">
          
        <?php 
          if(function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
          ?>
          <img class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-left me-3 bs-icon" src="<?= $logo[0] ?>"/>
       <span><?php bloginfo('name'); ?></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">


              <?php
                wp_nav_menu(
                  array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="navbar-nav mx-auto">%3$s</ul>',
                    'add_li_class'  => 'nav-item',
                    'add_link_class' => 'nav-link'
                  )
                );
                
                    $button_text = get_theme_mod('signup_button_text', 'Sign Up');
                    $button_link = get_theme_mod('signup_button_link', 'signup.html');
              ?>


<?php if( get_theme_mod( 'show_signup_button', '1' ) ): ?>
    <a class="btn btn-primary shadow" role="button" href="<?php echo esc_url($button_link); ?>"><?php echo esc_html($button_text); ?></a>
<?php endif; ?>
            </div>
        </div>
    </nav>
    