<?php
get_header();
?>

<section class="py-5">
    <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();                
                get_template_part( 'template-parts/content', 'article' );
            }
        }
    ?>
</section>

<?php
get_footer();
?>