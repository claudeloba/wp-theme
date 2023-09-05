<?php 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
?>

<header class="masthead" style="background-image:url('<?php echo esc_url($featured_img_url); ?>');">
    <div class="overlay"></div>
    <div class="container py-5">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                <div class="post-heading">
    <h1><?php the_title(); ?></h1>

    <h2 class="subheading"><?php echo get_post_meta( get_the_ID(), 'subheading', true ); ?></h2>
    <span class="meta">Posted by&nbsp;<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>&nbsp;on <?php the_date(); ?></span>
</div>
                </div>
            </div>
        </div>
    </header>
    <article class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                <?php
the_content();
?>
                </div>
            </div>
        </div>
 
    </article>