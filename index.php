<?php

get_header();
?>

<section class="py-5">
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <div class="col mb-4">
                        <div>
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="rounded img-fluid shadow w-100 fit-cover" style="height: 250px; object-fit: cover;" src="<?php the_post_thumbnail_url(); ?>">
                                <?php endif; ?>
                            </a>
                            <div class="py-4">
                                <span class="badge bg-primary mb-2"><?php the_category(', '); ?></span>
                                <h4 class="fw-bold"><?php the_title(); ?></h4>
                                <p class="text-muted"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<h1>No posts found</h1>';
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
